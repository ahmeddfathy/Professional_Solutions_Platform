<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientRequestController;

use App\Http\Controllers\EmailsController;
use App\Http\Controllers\AcceptedRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/error', function () {
    return view('error');
});



Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/logout', [EmailsController::class, 'logout'])->name('logout');


Route::get('/signup', [EmailsController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [EmailsController::class, 'signup']);
Route::get('/login', [EmailsController::class, 'showLoginForm'])->name('login');
Route::post('/login', [EmailsController::class, 'login']);
Route::resource('category' , CategoryController::class);
Route::resource('services' , ServiceController::class);
Route::resource('client_requests' , ClientRequestController::class);
Route::resource('accepted_req' , AcceptedRequestController::class);
Route::get('/yourprofile' , function() {
    return view('profile');
});
