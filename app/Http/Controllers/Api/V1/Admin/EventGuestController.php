<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\EventGuest;
use App\Http\Controllers\ApiController;
use App\Http\Requests\Admin\EventGuestRequest;

class EventGuestController extends ApiController
{
    public function index()
    {
        $guests = EventGuest::with('event')->get();
        return $this->responseShowAll($guests);
    }

    public function store(EventGuestRequest $request)
    {
        $validatedData = $request->validated();
        $guest = EventGuest::create($validatedData);

        return $this->responseCreatedDeleted($guest, 'store');
    }

    public function update(EventGuestRequest $request, EventGuest $eventGuest)
    {
        $eventGuest->update($request->validated());
        return $this->responseUpdated($eventGuest);
    }

    public function destroy(EventGuest $eventGuest)
    {
        $data = $eventGuest->delete();
        return $this->responseCreatedDeleted($data, 'delete');
    }
}
