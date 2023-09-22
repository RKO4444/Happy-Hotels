<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    private $stripe;
    public function __construct()
    {
          $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));
    }
    private function createToken($cardData)
    {
        $token = null;
     try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $cardData['cardNumber'],
                    'exp_month' => $cardData['month'],
                    'exp_year' => $cardData['year'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            $token['error'] = $e->getError()->message;
        } catch (Exception $e) {
            $token['error'] = $e->getMessage();
        }
        return $token;
    }

    private function createCharge($tokenId, $amount)
    {
        $charge = null;
        try {
            $charge = $this->stripe->charges->create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $tokenId,
                'description' => 'My first payment'
            ]);
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }


    public function payment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'cardNumber' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvv' => 'required'
        ]);


        $token = $this->createToken($request);
        if (!empty($token['error'])) {
            return response()->json([
                'status' => false,
                'message' => "Payment failed"
            ]);
        }
        if (empty($token['id'])) {
            return response()->json([
                'status' => false,
                'message' => "Payment failed"
            ]);
        }

        $charge = $this->createCharge($token['id'], $request['amount']);
       
        if (!empty($charge) ){//&& $charge['status'] == 'succeeded') {
            return response()->json([
                'status' => true,
                'message' => "'Payment completed"
            ]);
        }
          else {
            return response()->json([
                'status' => false,
                'message' => "Payment failed"
            ]);
         }
      
      //  return response()->redirectTo('/');
    }

public function store(Request $request)
{
       $input = $request->all();
       Payment::create([
            'booking_id' => $input['booking_id'],
            'amount' => $input['amount']/100,
           
        ]);
         return response()->json([
            'status' => true,
            'message' => "Success",
          
          
        ]);
}
    
}
