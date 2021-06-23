<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\User;
class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
     public function verify(Request $req){
         if($req->email == $req->password){
        return view('Home.index');
        }else{
            echo "bye";
        }
    }

}
