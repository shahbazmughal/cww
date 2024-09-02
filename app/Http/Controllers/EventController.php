<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'event_title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            // 'start_date' => 'required|date',
            // 'end_date' => 'required|date|after_or_equal:start_date',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); // Save image to storage/app/public/images
        }

        // Create the event record
        Event::create([
            //'user_id' => $request->user()->id,
            'event_title' => $request->input('event_title'),
            'image' => $imagePath,
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'message' => $request->input('message'),
        ]);

        return response()->json(['success' => 'Event created successfully!'], 200);
    }
}
