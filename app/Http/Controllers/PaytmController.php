<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;

class PaytmController extends Controller
{
    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function pay() {

        $payment = PaytmWallet::with('receive');

        $payment->prepare([
            'order' => 23, // your order id taken from cart
          'user' => '1', // your user id
          'mobile_number' => 8329485255, // your customer mobile no
          'email' => 'surendrakawle99@gmail.com', // your user email address
          'amount' => 10, // amount will be paid in INR.
          'callback_url' => 'http://127.0.0.1:8000/payment/status' // callback URL
        ]);

        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');

        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        // dd($response);
        if($transaction->isSuccessful()){
            print_r('success');
        }else if($transaction->isFailed()){
          //Transaction Failed
          print_r('fail');
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
          print_r('open');
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id

        $transaction->getTransactionId(); // Get transaction id
    }
}
