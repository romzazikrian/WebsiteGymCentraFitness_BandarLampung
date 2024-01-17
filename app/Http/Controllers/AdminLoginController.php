<?php

namespace App\Http\Controllers;

use App\Models\AdminLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('authentication.adminlogin');
    }

    public function store(Request $request)
{
    // Validate the form data
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::guard('admins')->attempt($credentials)) {
        return redirect('/admin-panel');
    } else {
        return redirect('/adminlogin');
    }
}
public function logout()
{
    Auth::guard('admins')->logout();

    return redirect('/adminlogin');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   
    /**
     * Display the specified resource.
     */
    public function show(AdminLogin $adminLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminLogin $adminLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminLogin $adminLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminLogin $adminLogin)
    {
        //
    }
}
