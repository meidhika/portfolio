<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        
        $request->validate([
            'full_name' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:users',
            'password' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'birthday' => 'nullable|date',
            'gender' => 'nullable|string',
        ]);

        $users = User::create([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthday' => $request->birthday,
            'gender' => $request->gender,
        ]);
        
        Alert::success('Yeaaay Account Created', 'Your Account successfuly created');
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Alert::success('Login Success', 'Welcome to Dashboard');
            return redirect()->route('dashboard.index');
        }
        Alert::error('Error', 'Please Check Your Email or Password Again');
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        Alert::warning('See You Again', 'We Hope You Back Again, Thanks');
        return redirect()->route('login');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }
}
