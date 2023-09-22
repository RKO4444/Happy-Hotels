<?php

namespace Tests\Feature;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCustomerData()
    {
        $id=5;
        $customers=Customer::All();
        $response=$this->get('/api/customerdata');
        $response->assertOk();
        $response->assertJson($customers->toArray());
    }
}
