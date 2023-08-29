<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Scholarship;
use App\Http\Controllers\ApiController;
use App\Http\Requests\Admin\ScholarshipRequest;

class ScholarshipController extends ApiController
{

    public function store(ScholarshipRequest $request)
    {
        $validatedData = $request->validated();

        $scholarship = Scholarship::create($validatedData);
        return $this->responseCreatedDeleted($scholarship, 'insert');
    }


    public function update(ScholarshipRequest $request, Scholarship $scholarship)
    {
        $scholarship->update($request->validated());
        return $this->responseUpdated($scholarship);
    }

    public function destroy(Scholarship $scholarship)
    {
        $data = $scholarship->delete();
        return $this->responseCreatedDeleted($data, 'delete');
    }
}
