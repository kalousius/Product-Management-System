<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Process the login form submission
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to intended page or dashboard
            return redirect()->intended('/dashboard');
        }

        // Authentication failed, redirect back with error message
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Process the registration form submission
    public function register(Request $request)
    {
        // Validate registration form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Authenticate the user
        Auth::login($user);

        // Redirect to intended page or dashboard
        return redirect()->intended('/dashboard');
    }

    // Logout the user
    public function logout(Request $request)
    {
        Auth::logout(); // Logs out the currently authenticated user
        $request->session()->invalidate(); // Invalidates the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        // Redirect the user to the login page or any other page after logout
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
}