<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role_id' => '1',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => ' Amit Hotel',
            'email' => 'hotel1@gmail.com',
            'password' => Hash::make('hotel1'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => 'Vivek Hotel',
            'email' => 'hotel2@gmail.com',
            'password' => Hash::make('hotel2'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => ' Anubhav Hotel',
            'email' => 'hotel3@gmail.com',
            'password' => Hash::make('hotel3'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('user1'),
            'role_id' => '3',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('user2'),
            'role_id' => '3',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('user3'),
            'role_id' => '3',
            'api_token' => Str::random(60),
        ]);


        ///////dfghjk///hhjj 77
        //8
        DB::table('users')->insert([
            'name' => ' Ankit Hotel',
            'email' => 'hotel1qe@gmail.com',
            'password' => Hash::make('hotel1'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => ' sandeep Hotel',
            'email' => 'hotssdel1@gmail.com',
            'password' => Hash::make('hotel1'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => ' vaibhav Hotel',
            'email' => 'hotelsswe1@gmail.com',
            'password' => Hash::make('hotel1'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => ' abhay Hotel',
            'email' => 'hotessasdfl1@gmail.com',
            'password' => Hash::make('hotel1'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => ' atul Hotel',
            'email' => 'hoteldsf1@gmail.com',
            'password' => Hash::make('hotel1'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);
        DB::table('users')->insert([
            'name' => ' raunak Hotel',
            'email' => 'hotessl1kkk@gmail.com',
            'password' => Hash::make('hotel1'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);
    }
}
