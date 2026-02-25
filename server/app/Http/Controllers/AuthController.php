<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Signup
    public function signup(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

   




    // Login POST
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $user->password)){
            // Successful login → store session
            $request->session()->put('loginId', $user->id);
            return redirect('/dashboard')->with('success', 'Login Successful');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    // Dashboard
    public function dashboard(Request $request)
    {
        $loginId = $request->session()->get('loginId');
        if($loginId){
            return view('dashboard');
        } else {
            return redirect('/login')->with('error', 'Please login first');
        }
    }

    // Logout
    public function logout(Request $request)
    {
        if($request->session()->has('loginId')){
            $request->session()->pull('loginId');
        }
        return redirect('/login');
    }


    public function Home()
    {
        return view('Home');
    }
}