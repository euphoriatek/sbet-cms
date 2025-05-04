<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    
public function userList()
{
    // Fetch all users from the database
    $users = User::all();
    
    return view('admin.users_list', compact('users'));
}
// Show login form
public function showLoginForm()
{
    return view('admin.login'); // Return the admin login view
}

// Login function for Admin
public function login(Request $request)
{
$request->validate([
    'email' => 'required|email',
    'password' => 'required',
]);

$admin = Admin::where('email', $request->email)->first();

if ($admin && \Hash::check($request->password, $admin->password)) {
    // If the credentials are correct, log in the admin.
    Auth::guard('admin')->login($admin);  
    return redirect()->route('admin.dashboard');  // Redirect to the admin dashboard
}

// If credentials don't match, return a custom error message.
return back()->withErrors([
    'email' => 'These credentials do not match our records.',
]);
}


 // Admin Dashboard
public function dashboard()
{
    return view('admin.dashboard'); 
}

// Handle logout request
public function logout()
{
    Auth::logout();
    return redirect()->route('admin.login.form'); // Redirect to login page 
}

// Show the change password form
public function showChangePasswordForm($id)
{
    $admin = Admin::findOrFail($id);
    return view('admin.change_password', compact('admin'));
}

public function updatePassword(Request $request, $id)
{
    // Find the admin by ID
    $admin = Admin::findOrFail($id);
    
    // Update the password without validation
    $admin->password = Hash::make($request->password); 
    $admin->save();  // Save the updated password to the database

    // Redirect with a success message
    return redirect()->route('admin.change.password', $id)
        ->with('success', 'Password changed successfully.');
}


 // Show the create user form
 public function showCreateUser()
 {
    return view('admin.create_user');
 }

// Store the user
public function storeUser(Request $request)
{
    // Validate the incoming request
    $validatedData = $request->validate([
        'full_name' => 'required|string|max:255',
        'mobile_number' => 'required|numeric|digits:10', 
        'email' => 'nullable|email',
        'password' => 'required|min:6',
    ]);

    // Create the user after validation
    $user = new User();
    $user->full_name = $request->full_name;
    $user->mobile_number = $request->mobile_number;
    $user->email = $request->email ?? null;
    $user->password = Hash::make($request->password); // Ensure password is hashed before saving
    $user->save();

    // Redirect with success message
    return redirect()->route('admin.list.user')->with('success', 'User created successfully!');
}

//To deleting the user from the user list 
public function userDelete($id)
{
    try {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect with a success message
        return redirect()->route('admin.list.user')->with('success', 'User deleted successfully!');
    } catch (\Exception $e) {
        // Log any error that occurs
        Log::error('Error deleting user: ' . $e->getMessage());

        // Redirect back with an error message
        return back()->with('error', 'Failed to delete the user.');
    }
}


}
