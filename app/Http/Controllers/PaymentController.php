<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class PaymentController extends Controller
{

    public function test () {

        $payment = Mollie::api()->payments()->create([
            "amount"      => 10.00,
            "description" => "My first API payment",
            "redirectUrl" => "https://webshop.example.org/order/12345/",
        ]);

        $payment = Mollie::api()->payments()->get($payment->id);

        if ($payment->isPaid())
        {
            echo "Payment received.";
        }

        dd($payment);
    }
}
