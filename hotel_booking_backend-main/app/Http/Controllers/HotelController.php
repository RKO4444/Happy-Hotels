<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class HotelController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
       $user = Hotel::create([
        'phonenumber'=> $input['number'],
        'wifi'=> $input['wifi'],
        'availability'=> $input['avail'],
        'address'=> $input['address'],
        'location'=> $input['pincode'],
        'district'=> $input['district'],
        'numberofavailroom'=> $input['totalroom'],
        'hotelimage'=> $input['imglink'],
        'user_id'=> $input['userId'],
        
        ]);
        $insertedId = $user->id;
       

        return response()->json([
            'status' => true,
            'message' => "Registation Success",
            'id'=> $insertedId
        ]);
    }
    public function shows($id)
    {

    $hotel=DB::table('hotels')->join('rooms', 'hotels.id', '=', 'rooms.hotel_id')
                ->select('hotels.*','rooms.*')->where('hotels.id',$id)->get();
        if($hotel)
        {
            return response()->json([
                'status'=>200,
               'hotel'=>$hotel,
            ], 200);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>"no hotel found"
            ],404);
        }
    
}
    
    public function edit(Request $request,$id)
    {
        $input = $request->all();
        
       
        $hotel =  Hotel::find($id);
        $rooms= Room::where('hotel_id' , $id)->get();
        if($hotel)
        {
            $hotel->phonenumber = $input['number'];
            $hotel->wifi= $input['wifi'];
            $hotel->availability= $input['avail'];
            $hotel->address = $input['address'];
            $hotel->location = $input['pincode'];
            $hotel->district = $input['district'];
            $hotel->numberofavailroom = $input['totalroom'];
            $hotel->hotelimage = $input['imglink'];
           $hotel->update();
        
            return response()->json([
                'status'=>200,
                'room'=> $rooms,
                'message'=>'hotel updated Succesfully',
            ], 200);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>"no hotel found"
            ],404);
        }
    
}
    public function hotelfind(Request $request)
    {
        $input = $request->all();
       
        $post =  Hotel::where('user_id',$input['userId'])->count();
           
       
       
         return response()->json([
             'status' => true,
             'message' => "Success",
             'users' => $post
         ]);
      

    
}
    public function hotellist()
    {
        $post = DB::table('hotels')->select('hotels.id AS hotelid',"users.name","users.email","hotels.district","hotels.address","hotels.location","hotels.phonenumber","hotels.hotelimage","hotels.numberofavailroom")->join('users', 'users.id' , '=' ,'hotels.user_id')->simplepaginate(6);
        $pageCount= count(Hotel::all())/6;
    	return response()->json(
            ['paginate'=>$post,
            'page_count'=>ceil($pageCount)
            ]
        );

    }
   public function show($id)
    {
        $contact = Hotel::find($id);
        return response()->json($contact);
    }
   public function update(Request $request, $id)
    {
       $hotels = Hotel::find($id);
       $hotels->update($request->all());
       return response()->json('Hotel updated');
    }
   public function index()
    {
        
    $hotels = User::join('hotels', 'users.id', '=', 'hotels.user_id')
    ->select('users.*', 'hotels.*')
    ->get();    
    return response()->json($hotels);
        
    }
    public function count()
    {
        $count = Hotel::all()->count();
        return response()->json($count);
    }
    public function destroy($id)
    {

        $hotel = Hotel::findOrFail($id);
        $user = $hotel->user;
        
        if ($user) {
            $user->delete();
        }
        
        $hotel->delete();
  return response()->json(' deleted!');
       
    }
    
    public function hotelbyid($id)
    {

    $hotels = DB::table('users')->join('hotels', 'users.id', '=', 'hotels.user_id')
    ->select('users.*', 'hotels.*')->where('user_id' , $id )
    ->get();    
    return response()->json($hotels);
    }


}