<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Collaboration;
use App\Http\Controllers\ApiController;
use App\Http\Requests\Admin\CollaborationRequest;


class CollaborationController extends ApiController
{
    public function index()
    {
        $collaborators = Collaboration::with('event')->get();
        return $this->responseShowAll($collaborators);
    }

    public function store(CollaborationRequest $request)
    {
        $validatedData = $request->validated();
        $collaborator = Collaboration::create($validatedData);

        return $this->responseCreatedDeleted($collaborator, 'store');
    }

    public function update(CollaborationRequest $request, Collaboration $collaborator)
    {
        $collaborator->update($request->validated());
        return $this->responseUpdated($collaborator);
    }

    public function destroy(Collaboration $collaborator)
    {
        $data = $collaborator->delete();
        return $this->responseCreatedDeleted($data, 'delete');
    }
}
