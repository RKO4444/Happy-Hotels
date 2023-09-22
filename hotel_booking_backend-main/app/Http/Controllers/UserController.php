<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
  
    public function userbyid($id)
    {
     $users = DB::table('users')->where('id' , $id )->get();
     return response()->json($users);
    }
    public function store(Request $request)
    {
        $input = $request->all();
         $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id'=>$input['role_id'],
            'api_token'=> Str::random(60),
        ]);
        $insertedId = $user->id;
        return response()->json([
            'status' => true,
            'message' => "Registation Success",
            'id'=>$insertedId
          
        ]);
    }
}
