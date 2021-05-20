<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userLogin extends Controller
{
    //
    function getData(Request $req){
        $req ->validate([
            'username'=>'required',
            'userpassword'=>'required'
        ]);
        return $req->input();
    }
}
