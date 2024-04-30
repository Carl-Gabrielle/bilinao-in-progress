<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return view  ('users.login');
    }
    
    public function  forgotPassword(Request $request)
    {
        return view('users.forgot_password');
    }
    public function dashboard (Request $request)
    {
        return view  ('dashboard.user_dashboard');
    }
    public function admin (Request $request)
    {
        return view  ('dashboard.admin');
    }
    public function seller (Request $request)
    {
        return view  ('dashboard.seller');
    }
    public function details (Request $request)
    {
        return view  ('productDetails.details');
    }
}
