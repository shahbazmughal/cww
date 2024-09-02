<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
use Validator;

class EventController extends Controller
{
    /**
     * Store a newly created event in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'event_title' => 'required|string|max:255',
            'start_date' => 'required|date_format:m-d-Y',
            'end_date' => 'required|date_format:m-d-Y|after_or_equal:start_date',
            'details' => 'required|string',
            'job_post.image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Return validation errors if any
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // Convert dates to MySQL format (YYYY-MM-DD)
            $startDate = Carbon::createFromFormat('m-d-Y', $request->start_date)->format('Y-m-d');
            $endDate = Carbon::createFromFormat('m-d-Y', $request->end_date)->format('Y-m-d');

            // Handle the event creation
            $event = Event::create([
                'title' => $request->event_title,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'details' => $request->details,
                'image' => $request->file('job_post.image')->store('images', 'public'),
            ]);

            // Return success response
            return response()->json(['success' => 'Event created successfully.']);
        } catch (\Exception $e) {
            // Handle unexpected errors
            return response()->json(['error' => 'An error occurred while creating the event.'], 500);
        }
    }

    /**
     * Fetch events for the calendar.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function fetchEvents()
    {
        $events = Event::all();

        // Format events for the calendar
        $formattedEvents = $events->map(function ($event) {
            return [
                'startDate' => Carbon::parse($event->start_date)->toISOString(),
                'endDate' => Carbon::parse($event->end_date)->toISOString(),
                'summary' => $event->title,
            ];
        });

        return response()->json($formattedEvents);
    }
}
