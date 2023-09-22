<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            'price' => ' 1000',
            'arival' => '2023-04-18',
            'departure' => '2023-04-20',
            'message' => 'provide some message',
            'numberofroomtype1' =>'1',
            'numberofroomtype2' => '2',
            'numberofroomtype3' => '3',
            'hotel_id'=> '1',
            'customer_id'=>'2'
            ] );
            DB::table('bookings')->insert([
                'price' => ' 1500',
                'arival' => '2023-04-19',
                'departure' => '2023-04-20',
                'message' => 'provide two of  some message',
                'numberofroomtype1' =>'1',
                'numberofroomtype2' => '1',
                'numberofroomtype3' => '3',
                'hotel_id'=> '2',
                'customer_id'=>'1'
                ] );
                DB::table('bookings')->insert([
                    'price' => ' 2000',
                    'arival' => '2023-04-17',
                    'departure' => '2023-04-23',
                    'message' => 'provide some message',
                    'numberofroomtype1' =>'2',
                    'numberofroomtype2' => '2',
                    'numberofroomtype3' => '0',
                    'hotel_id'=> '3',
                    'customer_id'=>'3'
                    ] );
                    DB::table('bookings')->insert([
                        'price' => ' 1700',
                        'arival' => '2023-04-18',
                        'departure' => '2023-04-28',
                        'message' => 'provide  messagen what you want',
                        'numberofroomtype1' =>'1',
                        'numberofroomtype2' => '2',
                        'numberofroomtype3' => '3',
                        'hotel_id'=> '2',
                        'customer_id'=>'3'
                        ] );
    }
}
