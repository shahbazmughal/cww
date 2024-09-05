<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function __construct()
    {
        // Only protect routes that require authentication
        $this->middleware('auth')->except(['fetchEvents', 'index']);
    }

    // Show the form for creating a new event
    public function create()
    {
        return view('submit_events');
    }

    // Store a newly created event in storage
    public function store(Request $request)
    {
        // Validate request
        $validator = $request->validate([
            'event_title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d|after_or_equal:start_date',
            'message' => 'nullable|string',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('user/events/images/' . auth()->id() . '/' . time(), 'public');
        }

        // Store event
        Event::create([
            'user_id' => auth()->id(),
            'event_title' => $request->input('event_title'),
            'image' => $imagePath,
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'message' => $request->input('message'),
        ]);

        return response()->json(['success' => 'Event submitted successfully']);
    }

    // Fetch all events
    public function fetchEvents()
    {
        $events = Event::all(['start_date', 'end_date', 'event_title', 'image', 'user_id', 'id']);

        $formattedEvents = $events->map(function ($event) {
            return [
                'startDate' => $event->start_date,
                'endDate' => $event->end_date,
                'summary' => $event->event_title,
                'image' => $event->image ? Storage::url($event->image) : null,
                'user_id' => $event->user_id,
                'id' => $event->id
            ];
        });

        return response()->json($formattedEvents);
    }

    // Index method to display calendar events page
    public function index()
    {
        // No authentication required
        $events = Event::all();
        return view('calendar_events', compact('events'));
    }

    // Show a specific event
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('event.show', compact('event'));
    }

    // Show the form for editing a specific event
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event'));
    }

    // Update a specific event in storage
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        // Validate request
        $request->validate([
            'event_title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d|after_or_equal:start_date',
            'message' => 'nullable|string',
        ]);

        // Handle image upload
        $imagePath = $event->image;
        if ($request->hasFile('image')) {
            // Delete old image
            if ($imagePath && file_exists(public_path('storage/' . $imagePath))) {
                unlink(public_path('storage/' . $imagePath));
            }
            // Upload new image
            $imagePath = $request->file('image')->store('user/events/images/' . $event->user_id . '/' . time(), 'public');
        }

        // Update event
        $event->update([
            'event_title' => $request->input('event_title'),
            'image' => $imagePath,
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'message' => $request->input('message'),
        ]);

        return response()->json(['success' => 'Event updated successfully']);
    }

    // Remove a specific event from storage
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        // Delete image file
        if ($event->image && file_exists(public_path('storage/' . $event->image))) {
            unlink(public_path('storage/' . $event->image));
        }
        // Delete event record
        $event->delete();
        return response()->json(['success' => 'Event deleted successfully']);
    }
}