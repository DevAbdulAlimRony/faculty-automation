<?php
use Illuminate\Support\Facades\Route;

//--Admin Routes--//
Route::group(['prefix' => 'v1/admin', 'as' => 'v1.admin.', 'namespace' => 'App\Http\Controllers\Api\V1\Admin'], function () {

    //Page Settings
    Route::apiResource('settings', SettingController::class)->only(['update']);

    //About
    Route::apiResource('about', AboutController::class)->except(['show']);

    // Event Types, Events, Event Guests, Event Collaborators/Sponsors
    Route::apiResource('event-types', EventTypeController::class)->except(['show']);
    Route::apiResource('events', EventController::class);
    Route::apiResource('event-guests', EventGuestController::class)->except(['show']);
    Route::apiResource('collaborations', CollaborationController::class)->except(['show']);

    //Scholarship
    Route::apiResource('scholarships', ScholarshipController::class)->except(['index', 'show']);
});


