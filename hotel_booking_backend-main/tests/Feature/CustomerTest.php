<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCustomerData()
    {
        $id=5;
        $customers=Customer::where('user_id',$id)->get();
        $response=$this->get('/api/customerbyid/'.$id);
        $response->assertOk();
        $response->assertJson($customers->toArray());
    }
}
