<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MollieController;
use App\Http\Conrollers\PayController;
use App\Http\Controllers\OnepayController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes ( pages link )
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::group(['middleware' -> ['auth','isUser']), function() {
  //  Route::get('/home', 'HomeController@index')->name("home");
Route::get('/myprofile','frontend\UserController@myprofile');
Route::post('/myprofile-update','frontend\UserController@profileupdate');

Route::get('/about', function () {
    return view('about');
});

Route::get('contact', 'ContactController@create');

Route::post('contact', 'ContactController@store');

Route::get('/contact', 'HomeController@index')->name('contact');

Route::post('/contact', 'HomeController@send_mail')->name('addContact');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    return view('home');
});

Route::get('/community', function () {
    return view('community');
});



Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/financial', function () {
    return view('financial');
});

Route::get('/payment1', function () {
    return view('payment1');
});

Route::get('/payment2', function () {
    return view('payment2');
});


Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');


//Route::post('submit', 'pays1@save');
Route::post('payment1',[PayController::class,'addData']);



// payment 1 test
Route::get('/payment1', [App\Http\Controllers\OnepayController::class, 'payment1'])->name('payment1');
Route::post('/payment1', [App\Http\Controllers\OnepayController::class, 'storepayment1'])->name('payment1.store');



// payment stripe gateway
Route::get('/stripayment', [PaymentController::class, 'stripayment']);
Route::post('/transaction', [PaymentController::class, 'makePayment'])->name('make-payment');




Route::view("profile",'profile'); 
Route::view("form",'home');
Route::post("submit",'Editprofile@save');
//Route:get('/contact',[ContactController::class,'contact']);   //contact-form & contact function 
//Route::post('/send-message',[ContactController::class,'sendEmail'])->name(contact.send);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('layouts\app');




Auth::routes();

