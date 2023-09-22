<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Payment;

class PaymentTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPaymentForIdOne()
    {
        $payments= Payment::where('id',1)->first();
        $this->assertDatabaseHas('payments', [
         'amount' => '1000',
         'booking_id' => '1',
     ]);
     $retrievedUser = Payment::where('amount', '1000')->first();
     $this->assertEquals($payments->amount, $retrievedUser->amount);
 
      
    } 
}
