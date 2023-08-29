<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Event;
use App\Http\Controllers\ApiController;
use App\Http\Requests\Admin\EventRequest;

class EventController extends ApiController
{
    public function index()
    {
        $events = Event::all();
        return $this->responseShowAll($events);
    }

    public function store(EventRequest $request)
    {
        $validatedData = $request->validated();
        $event = Event::create($validatedData);

        return $this->responseCreatedDeleted($event, 'store');
    }

    public function show(Event $event)
    {
        // return $this->responseShowOne($event->load('eventGuests'));
        return $this->responseShowOne($event);
    }


    public function update(EventRequest $request, Event $event)
    {
        $event->update($request->validated());
        return $this->responseUpdated($event);
    }

    public function destroy(Event $event)
    {
        $data = $event->delete();
        return $this->responseCreatedDeleted($data, 'delete');
    }
}
