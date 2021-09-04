<?php 

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Dashboard\WelcomeControoler;
use App\Http\Controllers\Dashboard\WelcomeControoler;

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){

	Route::prefix('dashboard')->name('dashboard.')->group(function () {

		// Route::get('/', function () {
		//     return 'fdf';
		// })->name('dashboard');

        // Route::get('/', [WelcomeControoler::class,'index'])->name('welcome');
        Route::get('/', [WelcomeControoler::class,'index'])->name('welcome');

        // user routes
        // Route::resource('users', 'UserController')->except(['show']);

    });//end of dashboard routes
	
});//end of LaravelLocalization