<?php

namespace App\Http\Controllers\Tourist;
use App\Models\Tourist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TouristController extends Controller
{
    function create(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tourists,email',
            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);

        $tourist = new Tourist();
        $tourist->name = $request->name;
        $tourist->email = $request->email;
        $tourist->password = Hash::make($request->password);
        $save = $tourist->save();

        if ($save) {
            return redirect()->back()->with('success', 'You are now registered successfully');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, failed to register');
        }
    }

    function check(Request $request)
    {
        //Validate inputs
        $request->validate([
            'email' => 'required|email|exists:tourists,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists on tourists table'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('tourist')->attempt($creds)) {
            return redirect()->route('tourist.home');
        } else {
            return redirect()->route('tourist.login')->with('fail', 'Incorrect credentials');
        }
    }

    function logout()
    {
        Auth::guard('tourist')->logout();
        return redirect('/');
    }
}
