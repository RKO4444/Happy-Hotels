<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
   
    public function createhotel(Request $request)
    {
        
        $input = $request->all();
       $id= User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id'=>$input['role_id'],
            'api_token'=> Str::random(60),
        ])->id;
        
      
        return response()->json([
            'status' => true,
            'message' => "Registation Success",
            
        ]);
    }
}







