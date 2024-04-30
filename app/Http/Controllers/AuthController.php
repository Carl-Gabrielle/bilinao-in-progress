<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup()
    {
        return view('users.signup');
    }
    public function store (Request $request){
        $validated = $request->validate([
            'name'=>'required|min:3|max:40',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed|min:8',
        ]);
        User::create([
            'name'=> $validated['name'],
            'email'=> $validated['email'],
            'password'=> Hash::make($validated['password']),
        ]);

            $user = Auth::user();
                return redirect()->route('users.login');
        
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $credentials['email'])->first();
    
        if (!$user) {
            return back()->withErrors(['email' => 'Email  not associated with any registered account.']);
        }
    
        if (!Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['password' => 'Incorrect password.']);
        }
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->usertype == '1') {
                return redirect()->route('dashboard.admin')->with('success', 'Logged in successfully');
            } elseif ($user->usertype == '2') {
                return redirect()->route('dashboard.seller')->with('success', 'Logged in successfully');
            } else {
                return redirect()->route('dashboard.user_dashboard')->with('success', 'Logged in successfully');
            }
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
      }
    
    
}

