<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'district' => 'Gorakhpur',
            'address' => 'kunraghat',
            'location' => '273010',
            'phonenumber' => '6784904403',
            'numberofavailroom'=>'21',
            'hotelimage'=> 'https://www.shutterstock.com/image-illustration/hotel-sign-stars-3d-illustration-260nw-195879770.jpg'  ,
            'wifi'=> '1'  ,
            'availability'=> '1'  ,
            'user_id'=> '2'  ,
            ] );
            DB::table('hotels')->insert([
                'district' => 'Lucknow',
                'address' => 'gomti nagar',
                'location' => '210301',
                'phonenumber' => '8920204403',
                'numberofavailroom'=>'18',
                'hotelimage'=> 'https://media.istockphoto.com/id/119926339/photo/resort-swimming-pool.jpg?s=612x612&w=0&k=20&c=9QtwJC2boq3GFHaeDsKytF4-CavYKQuy1jBD2IRfYKc='  ,
                'wifi'=> '1'  ,
                'availability'=> '1'  ,
                'user_id'=> '3'  ,
                ] );
                DB::table('hotels')->insert([
                    'district' => 'kanpur',
                    'address' => 'swaroop nagar',
                    'location' => '208001',
                    'phonenumber' => '9827604403',
                    'numberofavailroom'=>'18',
                    'hotelimage'=> 'https://thumbs.dreamstime.com/b/modern-commercial-building-lobby-office-corridor-hotel-passageway-139067767.jpg'  ,
                    'wifi'=> '1'  ,
                    'availability'=> '1'  ,
                    'user_id'=> '4'  ,
                    ] );





                DB::table('hotels')->insert([
                    'district' => 'banaras',
                    'address' => 'swaroop nagar',
                    'location' => '2080011',
                    'phonenumber' => '98217604403',
                    'numberofavailroom'=>'12',
                    'hotelimage'=> 'https://images.unsplash.com/photo-1615460549969-36fa19521a4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDF8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'  ,
                    'wifi'=> '1'  ,
                    'availability'=> '1'  ,
                    'user_id'=> '8'  ,
                    ] );
                DB::table('hotels')->insert([
                    'district' => 'kolkata',
                    'address' => 'rajendra nagar',
                    'location' => '208001',
                    'phonenumber' => '9827604403',
                    'numberofavailroom'=>'18',
                    'hotelimage'=> 'https://plus.unsplash.com/premium_photo-1678286769630-4ea3d6878dfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'  ,
                    'wifi'=> '1'  ,
                    'availability'=> '1'  ,
                    'user_id'=> '9'  ,
                    ] );
                DB::table('hotels')->insert([
                    'district' => 'kanpur',
                    'address' => 'swaroop nagar',
                    'location' => '208001',
                    'phonenumber' => '9827604403',
                    'numberofavailroom'=>'18',
                    'hotelimage'=> 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'  ,
                    'wifi'=> '1'  ,
                    'availability'=> '1'  ,
                    'user_id'=> '10'  ,
                    ] );
                DB::table('hotels')->insert([
                    'district' => 'gonda',
                    'address' => 'swaroop nagar',
                    'location' => '208001',
                    'phonenumber' => '9827604403',
                    'numberofavailroom'=>'18',
                    'hotelimage'=> 'https://images.unsplash.com/photo-1586611292717-f828b167408c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzN8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'  ,
                    'wifi'=> '1'  ,
                    'availability'=> '1'  ,
                    'user_id'=> '11'  ,
                    ] );
                DB::table('hotels')->insert([
                    'district' => 'basti',
                    'address' => 'basti nagar',
                    'location' => '208001',
                    'phonenumber' => '9827604403',
                    'numberofavailroom'=>'18',
                    'hotelimage'=> 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzZ8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'  ,
                    'wifi'=> '1'  ,
                    'availability'=> '1'  ,
                    'user_id'=> '12'  ,
                    ] );
                DB::table('hotels')->insert([
                    'district' => 'agra',
                    'address' => 'near taj mahal',
                    'location' => '208001',
                    'phonenumber' => '9827604403',
                    'numberofavailroom'=>'18',
                    'hotelimage'=> 'https://images.unsplash.com/photo-1615460549969-36fa19521a4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDF8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'  ,
                    'wifi'=> '1'  ,
                    'availability'=> '1'  ,
                    'user_id'=> '13'  ,
                    ] );
    }
}