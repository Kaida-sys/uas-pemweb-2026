<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use Livewire\Livewire;

/*
|--------------------------------------------------------------------------
| Livewire Asset Routes
|--------------------------------------------------------------------------
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get('/livewire/livewire.js', $handle);
});

/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('pages.home');
});

/*
|--------------------------------------------------------------------------
| Service Request (Contact Form)
|--------------------------------------------------------------------------
*/
Route::post('/service-request', function (Request $request) {

    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'service' => 'nullable|string',
        'message' => 'nullable|string',
    ]);

    ServiceRequest::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'service' => $request->service,
        'message' => $request->message,
    ]);

    return redirect('/#contact')->with('success', 'Pesan terkirim');
})->name('service-request.store');
