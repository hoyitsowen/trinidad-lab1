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
            'otFirstname' => 'required|string|min:5',
            'otLastname' => 'required|string|max:10',
            'otStudentNumber' => 'required|numeric',
            'otGender' => 'required',
            'otBirthdate' => 'required|date',
            'otCourse' => 'required|in:BS Information Technology,BS Computer Science,BS Information Systems',
            'otEmail' => 'required|email|max:255',
            'otContact' => 'required|numeric',
        ]);

        Client::create([
            'firstname' => $request->input('otFirstname'),
            'lastname' => $request->input('otLastname'),
            'stud_num' => $request->input('otStudentNumber'),
            'gender' => $request->input('otGender')
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }
}
