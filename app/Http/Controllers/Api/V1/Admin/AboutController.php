<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\About;
use App\Http\Controllers\ApiController;
use App\Http\Requests\Admin\AboutRequest;


class AboutController extends ApiController
{
    public function index()
    {
        $about = About::first();
        return $this->responseShowAll($about);
    }

    public function store(AboutRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['image'] = $this->uploadImage($request, 'image', 'about', 'about');

        $about = About::create($validatedData);
        return $this->responseCreatedDeleted($about, 'store');
    }

    public function update(AboutRequest $request, About $about)
    {
        $oldValue = $about->getOriginal('title');
        $this->updateImage($request, 'image', 'about', 'about', $about);

        $about->update($request->validated());
        return $this->responseUpdated($about, $oldValue, $about->title);
    }

    public function destroy(About $about)
    {
        $data = $about->delete();
        return $this->responseCreatedDeleted($data, 'delete');
    }
}
