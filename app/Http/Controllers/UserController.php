<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Auth;
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
    public function checkout(){
        return view('cart.checkout');
    }
    public function forgot_Password(Request $request){
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user)){
            $user->remember_token = Str::random(40);
            $user->save();
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', "Please check your email and reset your password");
        } else {
            return redirect()->back()->with('error', "Email not registered");
        }
    }
    // public function applySeller(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'business_name' => 'required|string|max:255',
    //         'business_details' => 'required|string',
    //     ]);

    //     // Get the currently authenticated user
    //     $user = Auth::user();

    //     // Update the user's type to '2' (seller)
    //     $user->usertype = '2';
    //     $user->save();

    //     return redirect()->route('dashboard.seller')->with('success', 'Your application has been submitted and you are now a seller.');
    // }
}
