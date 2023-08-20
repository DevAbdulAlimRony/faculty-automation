<?php
namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;



trait ApiResponser{

    private function successResponse($data, $code){
        return response()->json($data, $code);
    }

    protected function responseShowAll(Collection $collection, $code = 200){
        if (!$collection) {
            return response()->json(['message' => "Nothing Added"], 404);
        }

        //transformer here...
        $collection = $this->filterData($collection);
        $collection = $this->sortData($collection);
        $collection = $this->paginate($collection);
        //sort for transformer here...
        $collection = $this->cacheResponse($collection);
        return $this->successResponse($collection, $code);
    }

    protected function responseCreatedDeleted($data, $action, ?string $fieldName = null)
    {
        $position = strrpos($action, 'e');
        $action .= ($position === strlen($action) - 1) ? 'd' : 'ed';

        if ($data) {
            $success_message = ucwords($fieldName ? "{$fieldName} {$action} successfully" : "{$action} successfully");
            return response()->json(['data' => $data, 'message' => $success_message]);
        }

        else {
            $error_message = "Data not {$action}, Something went wrong !";
            return response()->json(['error' => $error_message], 400);
        }

    }

    protected function responseUpdated($data, $oldValue = null, $newValue = null)
    {
        if ($data->wasChanged()) {
            $message = $oldValue
                ? "'{$oldValue}' is updated to '{$newValue}' Successfully"
                : 'Updated successfully';

            return response()->json(['message' => $message, 'data' => $data]);
          }

        else {
            return response()->json(['error' => 'You didn\'t change anything!'], 422);
        }
    }

    protected function exceptionResponse($message, $code)
    {
        return response()->json(['error' => $message], $code);
    }

    protected function cacheResponse($data){
        $url = request()->url();
        $queryParams = request()->query();
        ksort($queryParams);
        $queryString = http_build_query($queryParams);
        $fulUrl = "{$url}?{$queryString}";
        return Cache::remember($fulUrl, 30/60, function() use($data){
            return $data;
        });
    }

    protected function sortData(Collection $collection){
        if(request()->has('sort_by')){
            $attribute = request()->sort_by;
            $collection = $collection->sortBy->{$attribute};
        }
        return $collection;
    }

    protected function filterData(Collection $collection){
        foreach(request()->query() as $attribute => $value){
            if(isset($attribute, $value)){
                $collection = $collection->where($attribute, $value);
            }
        }
        return $collection;
    }


    protected function paginate(Collection $collection){

        $rules = [
            'per_page' => 'integer|min:2|max:50',
        ];

        Validator::validate(request()->all(), $rules);
        $page = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 2;

        if(request()->has('per_page')){
            $perPage = (int) request()->per_page;
        }

        $results = $collection->slice(($page - 1) * $perPage, $perPage)->values();

        $paginated = new LengthAwarePaginator($results, $collection->count(), $perPage, $page, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        $paginated->appends(request()->all());
        return $paginated;
    }

}
