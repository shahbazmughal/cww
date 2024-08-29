<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        
        // Validate the incoming request
        $validated = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'department' => 'required|string',
            'category' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send the email
        Mail::to('shahbazhh01@gmail.com')->send(new \App\Mail\ContactMail($validated));

        echo json_encode(['success'=> true , 'message'=> 'Email sent successfully!']);
    }
}
