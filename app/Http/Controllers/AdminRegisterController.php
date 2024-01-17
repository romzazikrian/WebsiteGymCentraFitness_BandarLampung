<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminRegister; // Make sure to import the Admin model

class AdminRegisterController extends Controller
{
    public function index()
    {
        return view('authentication.adminregister'); // Assuming your registration form view is in resources/views/admin/register.blade.php
    }

    public function store(Request $request)
    {
       // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6',
        ]);

        // Create a new AdminRegister instance
        $admin = new AdminRegister([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Save the admin to the database
        $admin->save();

        // You can add additional logic here (e.g., sending a confirmation email)

        return redirect('/adminlogin')->with('success', 'Admin account created successfully. Please login.');
    }
}
