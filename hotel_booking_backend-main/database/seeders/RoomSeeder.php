<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '120',
            'facilities' => 'They include coms, sounders and more. Amenities often include personal items like the toiletries the hotel provides.',
            'image' => 'https://images.unsplash.com/photo-1564078516393-cf04bd966897?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHJvb21zfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '4',
            'hotel_id' => '1'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '2',
            'price' => '180',
            'facilities' => ' mini-bars, free Wi-F They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://plus.unsplash.com/premium_photo-1675615649180-045cc3567554?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8cm9vbXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '1'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '3',
            'price' => '250',
            'facilities' => ', refrigerators, mini-bars, free Wi-Fso include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '7',
            'hotel_id' => '1'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '180',
            'facilities' => ' mini-bars, free Wi-Fi, coffeenclude things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://plus.unsplash.com/premium_photo-1663126298656-33616be83c32?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '2'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '2',
            'price' => '280',
            'facilities' => ' Wi-Fi, coffee-makers, hairdryeries the hotel provides. They can also comfortable, such as air-conditioning.',
            'image' => 'https://media.istockphoto.com/id/639822898/photo/home-interior-of-a-contemporary-living-room-with-furniture.jpg?s=612x612&w=0&k=20&c=VugkGxHgDCZi2y6601kfGglQmfDW1a--tIJinSspoVs=',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '2'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '3',
            'price' => '350',
            'facilities' => ' free Wi-Fi, coffee-makers,ke the toiletriude things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1560448205-4d9b3e6bb6db?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '17',
            'hotel_id' => '2'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '129',
            'facilities' => 'mini-bars, free Wmore. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '8',
            'hotel_id' => '3'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '2',
            'price' => '285',
            'facilities' => 'bars, free Wi-Fi, coffities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHJvb21zfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '3'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '3',
            'price' => '350',
            'facilities' => 'ators, mini-bars and more. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1551105378-78e609e1d468?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '7',
            'hotel_id' => '3'
        ]);



        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '129',
            'facilities' => 'mini-bars, free Wmore. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '8',
            'hotel_id' => '4'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '2',
            'price' => '285',
            'facilities' => 'bars, free Wi-Fi, coffities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHJvb21zfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '4'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '3',
            'price' => '350',
            'facilities' => 'ators, mini-bars and more. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1551105378-78e609e1d468?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '7',
            'hotel_id' => '4'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '129',
            'facilities' => 'mini-bars, free Wmore. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '8',
            'hotel_id' => '5'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '2',
            'price' => '285',
            'facilities' => 'bars, free Wi-Fi, coffities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHJvb21zfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '5'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '3',
            'price' => '350',
            'facilities' => 'ators, mini-bars and more. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1551105378-78e609e1d468?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '7',
            'hotel_id' => '5'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '129',
            'facilities' => 'mini-bars, free Wmore. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '8',
            'hotel_id' => '6'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '2',
            'price' => '285',
            'facilities' => 'bars, free Wi-Fi, coffities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHJvb21zfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '6'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '3',
            'price' => '350',
            'facilities' => 'ators, mini-bars and more. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1551105378-78e609e1d468?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '7',
            'hotel_id' => '6'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '129',
            'facilities' => 'mini-bars, free Wmore. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '8',
            'hotel_id' => '7'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '2',
            'price' => '285',
            'facilities' => 'bars, free Wi-Fi, coffities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHJvb21zfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '7'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '3',
            'price' => '350',
            'facilities' => 'ators, mini-bars and more. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1551105378-78e609e1d468?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '7',
            'hotel_id' => '7'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '129',
            'facilities' => 'mini-bars, free Wmore. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '8',
            'hotel_id' => '8'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '2',
            'price' => '285',
            'facilities' => 'bars, free Wi-Fi, coffities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHJvb21zfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '8'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '3',
            'price' => '350',
            'facilities' => 'ators, mini-bars and more. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1551105378-78e609e1d468?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '7',
            'hotel_id' => '8'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '129',
            'facilities' => 'mini-bars, free Wmore. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1616047006789-b7af5afb8c20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '8',
            'hotel_id' => '9'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '2',
            'price' => '285',
            'facilities' => 'bars, free Wi-Fi, coffities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1600121848594-d8644e57abab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHJvb21zfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '6',
            'hotel_id' => '9'
        ]);
        DB::table('rooms')->insert([
            'roomtype' => '3',
            'price' => '350',
            'facilities' => 'ators, mini-bars and more. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
            'image' => 'https://images.unsplash.com/photo-1551105378-78e609e1d468?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fHJvb218ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'avail' => '1',
            'numberofroom' => '7',
            'hotel_id' => '9'
        ]);




    }
}