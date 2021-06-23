<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\User;
use App\Models\Customer;
class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
     public function verify(Request $req){
         

        $req->validate([
            'email' => 'required|email|max:50',
            'password'=> 'required|min:8|max:20|alpha_num',
        ]);
        $customer = Customer::where('email',$req->email)
            ->where('password',$req->password)
            ->first();
         if($customer){

        //      echo $req->username;
        // //     $C=Customer::find($req->email);
         $req->session()->put('email',$req->email);
        
                        
          return redirect('/home');
            
        }else{
            echo "bye";
        }
    }

}
