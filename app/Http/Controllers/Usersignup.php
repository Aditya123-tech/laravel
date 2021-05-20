<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class Usersignup extends Controller
{
    //
    function signup(Request $req){
        $req ->validate([
          //  'id'=>'required',
           
            'name'=>'required',
            'email'=>'required',
            'password'=>'required']);

        $user= new user;
        $user-> Uid=$req->id;
        $user-> name=$req->name;
        $user-> email=$req->email;
        $user-> password=$req->password;
        $user-> save();
        return redirect('signup');
           
    }

}
