<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class JobPostController extends Controller
{
    /**
     * Show the form for creating a new job post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('job_posts.create');
    }

    /**
     * Store a newly created job post in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'job_title' => 'required|string|max:255',
            'job_post_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'message' => 'required|string',
        ]);

        $jobPost = new JobPost();
        $jobPost->user_id = Auth::id(); // Ensure the user is authenticated
        $jobPost->first_name = $request->first_name;
        $jobPost->last_name = $request->last_name;
        $jobPost->email = $request->email;
        $jobPost->job_title = $request->job_title;

        if ($request->hasFile('job_post_image')) {
            $imagePath = $request->file('job_post_image')->store('public/user/job_posts/images');
            $imagePath2 = $request->file('job_post_image')->store('storage/app/public/user/job_posts/images');
            $jobPost->job_post_image = str_replace('public/', '', $imagePath2); // Store path relative to 'storage/app/public'
        }

        $jobPost->message = $request->message;
        $jobPost->save();

        return redirect()->route('job_posts.index')->with('success', 'Job post created successfully.');
    }

    /**
     * Display a listing of job posts.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $jobPosts = JobPost::paginate(6);
        return view('pages.job_posts', compact('jobPosts'));
    }
}
