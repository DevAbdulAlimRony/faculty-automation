<?php
namespace App\Exceptions;

use Throwable;
use App\Traits\ApiResponser;
use Illuminate\Database\QueryException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    use ApiResponser;

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register(): void
    {
        $this->reportable(function (Throwable $e) {

        });
    }

    public function render($request, Throwable $e)
    {
        return match (true) {
            $e instanceof ValidationException => $this->convertValidationExceptionToResponse($e, $request),
            $e instanceof ModelNotFoundException => $this->handleModelNotFoundException($e),
            $e instanceof AuthenticationException => $this->unauthenticated($request, $e),
            $e instanceof AuthorizationException => $this->exceptionResponse($e->getMessage(), 403),
            $e instanceof NotFoundHttpException => $this->exceptionResponse('There is no existence of this URL you specified', 404),
            $e instanceof AccessDeniedException => $this->exceptionResponse('Access Denied', 403),

            $e instanceof MethodNotAllowedHttpException => $this->exceptionResponse('Bad Request! You are accessing invalid method', 405),
            $e instanceof QueryException => $this->foreignKeyOperationException($e, $request),
            $e instanceof HttpException => $this->exceptionResponse($e->getMessage(), $e->getCode()),

            default => config('app.debug')
            ? parent::render($request, $e)
            : $this->exceptionResponse('Server Busy. Try later', 500),
        };
    }

    private function handleModelNotFoundException(ModelNotFoundException $e){
         $modelName = ucwords(class_basename($e->getModel()));
         return $this->exceptionResponse("You didn't add any {$modelName} yet", 404);
    }

    protected function convertValidationExceptionToResponse(ValidationException $e, $request){
        $errors = $e->validator->errors()->getMessages();
        return response()->json($errors, 422);
    }

    protected function unauthenticated($request, AuthenticationException $e){
        return $this->exceptionResponse('You should login', 401);
    }

    protected function foreignKeyOperationException(QueryException $e, $request){
        $errorCode = $e->errorInfo[1];

        if($errorCode == 1451){
            return $this->exceptionResponse('Cannot remove this permanently. It is related with any other resources.', 409);
        }
    }
}
