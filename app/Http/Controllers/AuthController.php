<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
   

    // Handle login request
    public function login(Request $request)
    {
       
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check credentials
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, save user email in session
            $user = Auth::user();
            $request->session()->put('user_email', $user->email);

            // Redirect to intended page or home
            return redirect('/');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle logout request
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush(); // Clear all session data
        return redirect('/');
    }
}

