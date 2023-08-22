<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

trait ImageUploader
{
    protected function uploadImage(Request $request, string $fieldName, string $folder, string $filename): ?string
    {
        if ($request->hasFile($fieldName)) {
            $extension = $request->file($fieldName)->extension();
            $fileName = $filename . '.' . $extension;
            $path = $folder . '/' . $fileName;

            return $request->file($fieldName)->storeAs('images', $path);
        } else {
            return null;
        }
    }

    protected function updateImage(Request $request, string $fieldName, string $folder, string $filename, Model $model)
    {
        if ($request->hasFile($fieldName)) {
            Storage::delete($model->$fieldName);

            $model->$fieldName = $this->uploadImage($request, $fieldName, $folder, $filename);
        }
    }
}
