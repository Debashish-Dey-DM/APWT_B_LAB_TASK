<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function index(){
        // echo "hi";
         return view('Registration.index');
    }
    public function verify(Request $req){
    $req->validate([
            'username' =>'required'|'regex:/[a-z]/'| 'regex:/[A-Z]/',
            'email' => 'required|email|max:50|min:10',
            'password'=> 'required|min:8|max:20|alpha_num',
            'comfirmPassword' => 'required|same:password',
             'country'=>'required|min:3|max:20',
             'phone'=>'required|is_int()|min:11|max:15',

        ]);
        return redirect(login);
    }
}