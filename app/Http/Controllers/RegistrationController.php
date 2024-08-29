<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request
       

        // Generate a random password
        $password = $this->generateRandomString(10);

        // Create a new user
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'b_state' => $request->b_state,
            'zip' => $request->zip,
            'title' => $request->title,
            'company' => $request->company,
            'business' => $request->business,
            'product' => $request->product,
            'business_phone' => $request->businessphone,
            'mobile_no' => $request->mobileno,
            'password' => Hash::make($password),
        ]);


        // Send password to the user's email
        $sent_email = Mail::to($request->email)->send(new \App\Mail\RegistrationMail($password));
        if($user){
            return back()->with('success', 'Registration successful. Please check your email for your password.');
        }
        else {
            echo json_encode(['success'=> false , 'message'=> 'Email already registered!']);
        }

        // Send password to the user's email
        // Mail::to($request->email)->send(new \App\Mail\RegistrationMail($password));
        // return back()->with('success', 'Registration successful. Please check your email for your password.');
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
