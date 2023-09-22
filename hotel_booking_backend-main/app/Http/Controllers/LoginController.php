<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{
    public function check(Request $request)
    {
       
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $input = $request->all();
            $email = $input['email'];
           
           $users = DB::table('users')->select('id','role_id','name','email','api_token')->where('email' , $email )->get();
            return response()->json([
                'status' => true,
                'message' => "Success",
                'users' => $users
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => "Fail"

        ]);
    }
    public function tokenvalidate(Request $request)
    {
            $input = $request->all();
            $api_token = $input['api_token'];
           
           $users = DB::table('users')->select('id','role_id','name','email','api_token')->where('api_token' , $api_token )->get();
           
           if($users->isEmpty())
           {
            return response()->json([
            'status' => false,
            'message' => "invalid token",
         
        ]);
           }
           else{
            return response()->json([
                'status' => true,
                'message' => "Success",
                'users' => $users
            ]);
        }
        }
   
}
