<?php

use App\Http\Controllers\LandingController;

use Illuminate\Support\Facades\Route;





//Landing API
Route::get('/landing/stats/count', [LandingController::class, 'statsCounter'])->name('landing.stats.count');


Route::get('/postalpincode/{pincode}', function ($pincode) {
    return response(file_get_contents('https://api.postalpincode.in/pincode/' . $pincode));
});
