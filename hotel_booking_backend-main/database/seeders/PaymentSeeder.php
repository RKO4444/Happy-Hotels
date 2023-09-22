<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            'amount' => '1000',
            'booking_id'=>'1'
            ] );
            DB::table('payments')->insert([
                'amount' => '1500',
                'booking_id'=>'2'
                ] );

                DB::table('payments')->insert([
                    'amount' => '2000',
                    'booking_id'=>'3'
                    ] );
                    DB::table('payments')->insert([
                        'amount' => '1700',
                        'booking_id'=>'4'
                        ] );
    }
}
