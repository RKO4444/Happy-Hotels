<?php

namespace Tests\Feature;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Make_Hotel()
    {
       // create an hotel
       $hotel = DB::table('users')->insert([
        'name' => 'Hotel 20',
        'email' => 'Hotel_20@example.com',
        'role_id'=>'2',
        'password' => bcrypt('password'),
    ]);

    // check if the admin was created
    $this->assertDatabaseHas('users', [
        'name' => 'Hotel 20',
        'email' => 'Hotel_20@example.com',
    ]);

    // update the admin's email
    DB::table('users')->where('name', 'Hotel 20')->update([
        'email' => 'Hotel_200@example.com',
    ]);

    // check if the email was updated
    $this->assertDatabaseHas('users', [
        'name' => 'Hotel 20',
        'email' => 'Hotel_200@example.com',
    ]);

    // delete the admin
    DB::table('users')->where('name', 'Hotel 20')->delete();

    // check if the admin was deleted
    $this->assertDatabaseMissing('users', [
        'name' => 'Hotel 20',
    ]);
    }
}
