<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\RegistrationMail;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        // dd($request);
        // Validate the request
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'b_state' => 'required|string|max:2',
            'zip' => 'nullable|string|max:10',
            'title' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'business' => 'nullable|string',
            'product' => 'nullable|string',
            'businessphone' => 'nullable|string|max:20',
            'mobileno' => 'nullable|string|max:20',
        ]);

        // Generate a random password
        $password = $this->generateRandomString(10);

        // Create a new user
        $user = User::create([
            'firstname' => $validated['firstname'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'city' => $validated['city'],
            'b_state' => $validated['b_state'],
            'zip' => $validated['zip'],
            'title' => $validated['title'],
            'company' => $validated['company'],
            'business' => $validated['business'],
            'product' => $validated['product'],
            'business_phone' => $validated['businessphone'],
            'mobile_no' => $validated['mobileno'],
            'password' => Hash::make($password),
        ]);

        // Send password to the user's email
        Mail::to($validated['email'])->send(new RegistrationMail($password));

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Registration successful. Please check your email for your password.'
        ]);
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
