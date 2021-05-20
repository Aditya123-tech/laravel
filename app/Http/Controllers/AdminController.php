<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
class AdminController extends Controller
{
    public function login(Request $request){
    $credentials = $request->only('email','password');

    if(Auth::guard('admin')->attempt($credentials,$request->remember)){
        $user =Admin::where('email',$request->email)->first();
        Auth::guard('admin')->login($user);
        return redirect()->route('admin.home');
    }
    return redirect()->route('admin.login')->with('status','Failed to process Login');
}
}
