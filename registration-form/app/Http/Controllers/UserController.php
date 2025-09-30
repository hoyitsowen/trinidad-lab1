<?php

namespace App\Http\Controllers;

use App\Models\Client;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|min:5',
            'lastname' => 'required|string|max:10',
            'stud' => 'required|numeric',
            'gender' => 'required',
            'birthdate' => 'required|date',
            'course' => 'required|in:BS Information Technology,BS Computer Science,BS Information Systems',
            'email' => 'required|email|max:255',
            'contact' => 'required|numeric',
        ]);

        Client::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'stud_num' => $request->input('stud'),
            'gender' => $request->input('gender')
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }
}
