<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
// Show login form
public function showLoginForm()
{
    return view('user.login'); // Return the user login view
}

// Handle login request
public function login(Request $request)
{
$request->validate([
    'email' => 'required|email',
    'password' => 'required',
]);

$user = User::where('email', $request->email)->first();

if ($user && \Hash::check($request->password, $user->password)) {
    // If the credentials are correct, log in the user.
    Auth::guard('user')->login($user);  
    return redirect()->route('user.dashboard');  // Redirect to the user dashboard
}

// If credentials don't match, return a custom error message.
return back()->withErrors([
    'email' => 'These credentials do not match our records.',
]);
}
 // User Dashboard
 public function dashboard()
 {
    return view('user.dashboard'); 
 }

// Handle logout request
public function logout()
{
    Auth::logout();
    return redirect()->route('user.login.form'); // Redirect to login page
}
}
