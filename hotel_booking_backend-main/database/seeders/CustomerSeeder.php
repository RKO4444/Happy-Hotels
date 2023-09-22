<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'location' => 'naukavihar,gorakhpur',
            'phonenumber' => '7408684414',
            'addharnumber' => '24032043023043',
            'user_id' => '5',
            ] );
            DB::table('customers')->insert([
                'location' => 'Birhana,kanpur',
                'phonenumber' => '9052384414',
                'addharnumber' => '9949493023043',
                'user_id' => '6',
                ] );
                DB::table('customers')->insert([
                    'location' => 'sector 61,Delhi',
                    'phonenumber' => '9998684498',
                    'addharnumber' => '240354343343043',
                    'user_id' => '7',
                    ] );
    }
}
