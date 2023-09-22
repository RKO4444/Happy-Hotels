<?php

namespace Tests\Feature;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Make_Hotel()
    {
       // create an hotel
       $hotel = DB::table('bookings')->insert([
        'price' => '2022',
        'arival' => '2023-04-18',
        'departure'=>'2023-04-20',
        'message' => 'message',
        'numberofroomtype1' =>'1',
        'numberofroomtype2' =>'1',
        'numberofroomtype3' =>'1',
        'hotel_id' => '1',
        'customer_id' => '2'

    ]);

    // check if the admin was created
    $this->assertDatabaseHas('bookings', [
        'price' => '2022',
        'arival' => '2023-04-18',
    ]);

    // update the admin's email
    DB::table('bookings')->where('price', '2022')->update([
        'message' => 'message Update',
    ]);

    // check if the email was updated
    $this->assertDatabaseHas('bookings', [
        'message' => 'message Update',
    ]);

    // delete the admin
    DB::table('bookings')->where('message', 'message Update',)->delete();

    // check if the admin was deleted
    $this->assertDatabaseMissing('bookings', [
        'message' => 'message Update',
    ]);
    }
}
