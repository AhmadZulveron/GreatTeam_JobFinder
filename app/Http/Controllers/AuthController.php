<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function register(){
        return view('frontend.applicant.register');
    }

    // public function registerProses(Request $request){
    //     $user = User::create([
    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'email' => $request->email,
    //         'location' => $request->location,
    //         'password' => Hash::make($request->password),
    //         'phone' => $request->phone,

    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect('/email/verify');
    // }

    public function registerProses(Request $request){
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => "pelamar"
        ]);

        $userprofile = UserProfile::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'user_id' => $user->id
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/email/verify');
    }
}
