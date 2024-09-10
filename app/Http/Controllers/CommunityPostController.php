<?php

namespace App\Http\Controllers;

use App\Models\CommunityPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommunityPostController extends Controller
{
    public function create()
    {
        return view('pages.submit_community');
    }

    public function store(Request $request)
    {
        // Validate the form input, including the image field
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'community_title' => 'required|string|max:255',
            'message' => 'required|string',
            'community_post_image' => 'nullable|image|max:2048'
        ]);
    
        // Check if the request has a file for the image upload
        if ($request->hasFile('community_post_image')) {
            // Store the uploaded image in the storage directory
            $imagePath = $request->file('community_post_image')->store('user/community_posts/images', 'public');
        } else {
            // If no image is uploaded, set the image path to null or a default value
            $imagePath = null; // Or a default image path if necessary
        }
    
        // Insert the data into the database, including the image path
        CommunityPost::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'community_title' => $request->community_title,
            'message' => $request->message,
            'community_post_image' => $imagePath, // Store the image path if available
        ]);
    
        // Return a success response
        return response()->json(['success' => 'Community Post submitted successfully!']);
    }
    

    public function index()
    {
        $communityPosts = CommunityPost::paginate(6);
        return view('pages.community_posts', compact('communityPosts'));
    }
}
