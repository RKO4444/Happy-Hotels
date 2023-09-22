<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        Room::create([
        'roomtype'=> 1,
        'price'=> $input['price1'],
        'numberofroom'=> $input['number1'],
        'facilities'=> $input['desc1'],
        'image'=> $input['img1'],
        'avail'=> $input['avail1'],
        'hotel_id'=> $input['hotel_id'],
        ]);
        Room::create([
            'roomtype'=> 2,
            'price'=> $input['price2'],
            'numberofroom'=> $input['number2'],
            'facilities'=> $input['desc2'],
            'image'=> $input['img2'],
            'avail'=> $input['avail2'],
            'hotel_id'=> $input['hotel_id'],
            ]);
            Room::create([
                'roomtype'=> 3,
                'price'=> $input['price3'],
                'numberofroom'=> $input['number3'],
                'facilities'=> $input['desc3'],
                'image'=> $input['img3'],
                'avail'=> $input['avail3'],
                'hotel_id'=> $input['hotel_id'],
                ]);
        return response()->json([
            'status' => true,
            'message' => "Registation Success"
        ]);

        
    }
    public function edit(Request $request,$id)
    {
        $input = $request->all();
        
       
        $room =  Room::find($id);
       
        if($room)
        {
            $room->price = $input['price1'];
            $room->numberofroom= $input['number1'];
            $room->facilities= $input['desc1'];
            $room->image = $input['img1'];
            $room->avail = $input['avail1'];
          
           $room->update();
        
            return response()->json([
                'status'=>200,
                'message'=>'hotel updated Succesfully',
            ], 200);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>"no hotel found"
            ],404);
        }
        $id2=$id+1;

        $room =  Room::find($id2);
       
        if($room)
        {
            $room->price = $input['price2'];
            $room->numberofroom= $input['number2'];
            $room->facilities= $input['desc2'];
            $room->image = $input['img2'];
            $room->avail = $input['avail2'];
          
           $room->update();
        
            return response()->json([
                'status'=>200,
                'message'=>'hotel updated Succesfully',
            ], 200);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>"no hotel found"
            ],404);
        }
        $id3=$id+2;

        $room =  Room::find($id);
       
        if($room)
        {
            $room->price = $input['price3'];
            $room->numberofroom= $input['number3'];
            $room->facilities= $input['desc3'];
            $room->image = $input['img3'];
            $room->avail = $input['avail3'];
           $room->update();
        
            return response()->json([
                'status'=>200,
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
    public function roombyid($id)
        {
         $rooms = DB::table('rooms')->where('hotel_id' , $id )->get();
         return response()->json($rooms);
        }
}
