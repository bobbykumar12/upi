<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/upi-payment', function (Request $request) {
    $amount = $request->query('amount', env('UPI_DEFAULT_AMOUNT', 100)); // Default from env
    $upiId = env('UPI_ID', 'default@upi'); // Fetch from .env
    $payeeName = env('UPI_PAYEE_NAME', 'Default Name'); // Fetch from .env
    $transactionId = uniqid('txn_');
    $orderId = uniqid('ord_');
    
    $upiUrl = "upi://pay?pa={$upiId}&pn={$payeeName}&tid={$transactionId}&tr={$orderId}&tn=Payment%20for%20order&am={$amount}&cu=INR&mc=541551";

    return redirect()->away($upiUrl);

    return Redirect::to($upiUrl);
    return redirect($upiUrl);
});


Route::get('/', function () {
    return view('welcome');
});
