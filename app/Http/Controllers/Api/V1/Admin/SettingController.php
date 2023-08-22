<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Setting;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UpdateSettingRequest;
use Illuminate\Support\Facades\Storage;

class SettingController extends ApiController
{
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $this->updateImage($request, 'favicon', 'settings', 'favicon', $setting);
        $this->updateImage($request, 'logo', 'settings', 'logo', $setting);

        $setting->update($request->validated());
        return $this->responseUpdated($setting);
    }
}
