<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterControler extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $req){
        $req->validate(
            [
                'name'=> 'required',
                'email'=> 'required | email',
                'password'=> 'required'
                
                ]
            );
        echo "<pre>";
    print_r($req->all());
    }
}
