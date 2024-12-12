<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Display a listing of the events.
    public function index()
    {
        $events = Event::all();
        return view('event', compact('events'));
    }

    // Show the form for creating a new event.
    public function create()
    {
        return view('event_create');
    }

    // Store a newly created event in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'location' => 'required|string|max:255',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    // Display the specified event.
    public function show($event_id)
    {
        $event = Event::findOrFail($event_id);
        return view('event_show', compact('event'));
    }

    public function destroy($event_id)
    {
        $event = Event::findOrFail($event_id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
    public function edit($event_id)
    {
        $event = Event::findOrFail($event_id);
        return view('event_edit', compact('event'));
    }
    public function update(Request $request, $event_id)
    {
        $request->validate(['title' => 'required|string|max:255', 'description' => 'required|string', 'date' => 'required|date', 'time' => 'required|date_format:H:i', 'location' => 'required|string|max:255',]);
        $event = Event::findOrFail($event_id);
        $event->update($request->all());
        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }
}
