<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\RegisterUserRequest;

class AuthController extends Controller
{
    /**
     * Display a login form.
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Display a login form.
     */
    public function attempt(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|max:64',
            'remember' => 'nullable|boolean'
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->remember? true:false)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Log a user out of the system.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // return to home page with logout message
        return redirect()->route('login');
    }

    /**
     * Store a newly created user.
     */
    public function store(RegisterUserRequest $request, User $user)
    {
        $user->register($request);

        return redirect()->route('login');
    }

    /**
     * Display the register page.
     */
    public function register()
    {
        return view('auth.register');
    }
}
