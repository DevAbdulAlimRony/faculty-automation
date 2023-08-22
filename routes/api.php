<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Admin Routes
Route::group(['prefix' => 'v1/admin', 'as' => 'v1.admin.', 'namespace' => 'App\Http\Controllers\Api\V1\Admin'], function () {

    //Page Settings
    Route::apiResource('settings', SettingController::class)->only(['update']);

    //About
    Route::apiResource('about', AboutController::class)->except(['show']);

});


