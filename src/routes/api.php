<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('client.auth')->group(function () {

    Route::get('/service-request', function (Request $request) {
        $serviceRequest = $request->get('authenticated_client');

        return response()->json([
            'name' => $serviceRequest->name,
            'email' => $serviceRequest->email,
            'phone' => $serviceRequest->phone,
            'service' => $serviceRequest->service,
            'message' => $serviceRequest->message,
        ]);
    })->name('api.service-request');

    Route::get('/', function () {
        return "API is working properly.";
    })->name('api.home');

});
