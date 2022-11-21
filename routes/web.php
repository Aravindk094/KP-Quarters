<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.userhome');
});

    // User Pages Start

Route::get('/Home', function () { 
    return view('user.userhome');
 })->name('user.home');

Route::get('/user_application', function () {
    return view('user.userregistration');
})->name('user.reg');
Route::get('/user_edit_application', function () {
    return view('user.usereditapplication');
})->name('user.edit');

Route::get('/print_application', function () {
    return view('user.userprintappl');
})->name('user.print');

Route::get('/quarters_status', function () {
    return view('user.userquartersstatus');
})->name('user.qtrstatus');

Route::get('/user_vacate', function() {
    return view('user.userselfvacate');
})->name('user.selfvacate');

// User Pages End

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/user/profile',[UserProfileController::class, 'show'])->name('profile.hello.hii');