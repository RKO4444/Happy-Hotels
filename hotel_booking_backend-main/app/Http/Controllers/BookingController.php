<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Booking;
class BookingController extends Controller
{

    public function index()
    {
$bookings = Booking::all();
 return response()->json($bookings);

    }

    public function detail($id)
    {
        $hotelName = DB::table('bookings')->select('users.name','bookings.price','bookings.arival','bookings.departure')
            ->join('hotels', 'bookings.hotel_id', '=', 'hotels.id')
            ->join('users', 'hotels.user_id', '=', 'users.id')
            ->where('bookings.customer_id', $id)
            ->get();

         return response()->json($hotelName);
    }



    public function detailhotel($id)
    {

        $customerName = DB::table('bookings')->select('users.name','bookings.price','bookings.arival','bookings.departure')
            ->join('customers', 'bookings.customer_id', '=', 'customers.id')
            ->join('users', 'customers.user_id', '=', 'users.id')
            ->where('bookings.hotel_id', $id)
            ->get()
            ;
         return response()->json($customerName);
    }

    public function hotelbooking($id)
    {
        $bookings = Booking::all()->where('hotel_id', '=', $id);
        return response()->json($bookings);
    }

    public function count()
    {
        $count = Booking::all()->count();
        return response()->json($count);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $cust = User::find($input['customer_id'])->customer;
        $customer_id= $cust->id;

         $user = Booking::create([
            'price' => $input['price']/100,
            'arival' => $input['arival'],
            'departure' => $input['departure'],
            'message' => $input['message'],
            'numberofroomtype1' => $input['numberofroomtype1'],
            'numberofroomtype2' => $input['numberofroomtype2'],
            'numberofroomtype3' => $input['numberofroomtype3'],
            'hotel_id' => $input['hotel_id'],
            'customer_id'=>$customer_id,
        ]);

        $bookingId = $user->id;
        return response()->json([
            'status' => true,
            'message' => "Registation Success",
            'id'=>$bookingId,

        ]);
    }
}


