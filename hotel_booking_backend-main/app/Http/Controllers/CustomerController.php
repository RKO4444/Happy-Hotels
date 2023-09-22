<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customerbyid($id)
    {

        $customers = DB::table('users')->join('customers', 'users.id', '=', 'customers.user_id')
        ->select('users.*', 'customers.*')->where('user_id' , $id )
        ->get();
    return response()->json($customers);
    }
    public function index()
    {

    $customers = DB::table('users')->join('customers', 'users.id', '=', 'customers.user_id')
        ->select('users.*', 'customers.*')
        ->get();
        return response()->json($customers);
    }



    public function count()
    {
        $count = Customer::all()->count();
        return response()->json($count);
    }

    
    public function destroy($id)
    {

        $user = DB::table('users')
        ->join('customers', 'users.id', '=', 'customers.user_id')
        ->where('customers.id', $id)
        ->select('users.*')
        ->first();
        if ($user) {
            DB::table('users')->where('id', $user->id)->delete();
            DB::table('customers')->where('id', $id)->delete();
        }

}
    public function store(Request $request)
    {
        $input = $request->all();
         Customer::create([
            'location' => $input['location'],
            'phonenumber' => $input['phonenumber'],
            'addharnumber' => $input['addharnumber'],
            'user_id' =>$input['user_id'],
        ]);

        return response()->json([
            'status' => true,
            'message' => "Registation Success",

        ]);
    }
}
