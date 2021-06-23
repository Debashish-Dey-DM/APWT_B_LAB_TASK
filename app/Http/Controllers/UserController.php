<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function verify(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email|min:10|max:50',
            'password' => ['required', 
                            'min:8', 'max:20'],
            'confirmPassword' => 'required|same:password',
            'phone' => 'required|min:11|max:15',
            'country' =>  ['required', 
                            'min:3', 'max:20'] 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'error' => true,
                'message' => 'Required data missing.'
            ]);
        }else{
            $email=$request->input('email');
            $username=$request->input('user_name');

            $alreadyExist=DB::table('customers')
            ->where('username',$username)
            ->where('email',$email)
            ->first();
            
            if($alreadyExist){
                return redirect()->back()->with([
                    'error' => true,
                    'message' => 'Username or Email Already register'
                ]);

            }else{

                $username=$request->input('username');
                $password=$request->input('password');
                $phone=$request->input('phone');
                $country=$request->input('country');
                $company_name=$request->input('company_name');
                $type=$request->input('type');


                $data=array();
                
                $data['username']=$username;
                $data['email']=$email;
                $data['password']=$password;
               
                $data['country']=$country;
                $data['phone']=$phone;
                $data['company_name']=$company_name;
                $data['type']=$type;
                

                $insert_user = DB::table('customers')->insert($data);

                if($insert_user){
                    return redirect('/login');
                }else{
                    echo "Something Went Wrong";
                    
                }

                
            }
        }
    }
}
