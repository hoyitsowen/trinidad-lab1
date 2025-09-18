<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show the registration form
    public function showForm()
    {
        return view('register');
    }

    // Handle submission
    public function submitForm(Request $request)
    {
        // Validation rules
        $request->validate([
            'otFirstname' => 'required|string|max:50',
            'otLastname'  => 'required|string|max:50',
            'otEmail'     => 'required|email',
            'otAge'       => 'required|integer|min:1',
            'otPassword'  => 'required|min:6',
        ]);

        // Grab all validated inputs
        $otData = $request->only(['otFirstname', 'otLastname', 'otEmail', 'otAge', 'otPassword']);

        // Send to output view
        return view('register-output', compact('otData'));
    }
}
