<?php

namespace Tests\Feature;
use App\Models\Hotel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HotelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHotelData()
    {
        $id=4;
        $Hotels=Hotel::where('user_id',$id)->get();
        $response=$this->get('/api/hotelbyid/'.$id);
        $response->assertOk();
        $response->assertJson($Hotels->toArray());
    }
}
