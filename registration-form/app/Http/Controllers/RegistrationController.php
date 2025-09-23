<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('register');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Optional: validate inputs
        $validated = $request->validate([
            'otFirstname'     => 'required|string|max:50',
            'otLastname'      => 'required|string|max:50',
            'otStudentNumber' => 'required|string|max:10',
            'otGender'        => 'required',
            'otBirthday'      => 'required|date',
            'otCourse'        => 'required|string',
            'otEmail'         => 'required|email',
            'otContact'       => 'required|string|max:11',
            'otInfo'          => 'nullable|string|max:255',
        ]);

        // Send validated data to the output view
        return view('register-output', ['otData' => $validated]);
    }
}
