<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginPerusahaanController extends Controller
{
    public function login(){
        return view('frontend.company.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->put('email',$request->email);
            
            return redirect()->intended('/perusahaan-dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        // $request->validate([
        //     'email' => ['required'],
        //     'password' => ['required'],
        // ],
        // [
        //     'email.required' => 'Email wajib diisi',
        //     'password.required' => 'Password wajib diisi',
        // ]);

        // $infologin = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];
 
        // Session::flash('email', $request->email);
        // if (Auth::attempt($infologin)) {
        //     return redirect('perusahaan-dashboard')->with('sukses');
        // } else {
        //     return redirect('login-perusahaan')->withErrors('Username dan password tidak valid');
        // }
 
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
