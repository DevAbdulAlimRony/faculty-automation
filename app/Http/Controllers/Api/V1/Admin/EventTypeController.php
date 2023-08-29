<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\EventType;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class EventTypeController extends ApiController
{
    public function index()
    {
        $type = EventType::withCount('events')->get();
        return $this->responseShowAll($type);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

        $type = EventType::create($validatedData);
        return $this->responseCreatedDeleted($type, 'store');
    }

    public function show(EventType $eventType)
    {
        return $this->responseShowOne($eventType);
    }

    public function update(Request $request, EventType $eventType)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

        $oldValue = $eventType->getOriginal('title');

        $eventType->update($validatedData);
        return $this->responseUpdated($eventType, $oldValue, $eventType->title);
    }

    public function destroy(EventType $eventType)
    {
        $data = $eventType->delete();
        return $this->responseCreatedDeleted($data, 'delete');
    }
}
