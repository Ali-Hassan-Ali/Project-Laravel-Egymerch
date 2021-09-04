<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\WelcomeControoler;
use App\Http\Controllers\Home\SellerControoler;

Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){ //...

    Auth::routes();

    Route::get('/', [WelcomeControoler::class,'index'])->name('welcome');

    Route::get('/register', [SellerControoler::class,'index'])->name('seller.index');
    Route::post('/register', [SellerControoler::class,'store'])->name('seller.store');

});//end of LaravelLocalization
