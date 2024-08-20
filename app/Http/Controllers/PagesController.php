<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function about()
    {
        return view('pages.about');
    }
}
