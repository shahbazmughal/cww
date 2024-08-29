<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

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
            // return redirect('/');
             echo json_encode(['success'=> true , 'message'=> 'Logged successfully!']);
           // return redirect('/');
        }
        else {
            echo json_encode(['success'=> false , 'message'=> 'Invalid username or password']);
        }

        // Authentication failed
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }
    public function login_page(){
         if (Session::has('user_email')){
        return redirect('/'); 
        }
        return view('pages.login');
    }
    // Handle logout request
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush(); // Clear all session data
        return redirect('/');
    }
}

