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

// Route::get('/', function () {
//     return view('welcome');
// });

//Home page
Route::view('/', 'hire/home');




//register
// Route::view('/register', 'hire/register');
// Route::post('/register', 'Restroscontroller@register');

// //Login
// Route::view('/login', 'hire/login');
// Route::post('/login', 'Restroscontroller@login');

//Tourist Guide
Route::view('/guide', 'hire/touristguide');

//Driver
Route::view('/driver', 'hire/driver');

//Tuition tutor
Route::view('/tutor', 'hire/tutor');

//Technician
Route::view('/tech', 'hire/technician');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);


Route::middleware(['auth'])->group(function () {
   //Hiring Website
Route::get('/contact', 'Restroscontroller@index');
Route::get('/contact', 'Restroscontroller@contact');


//Equipment
Route::view('/add', 'hire/add');
Route::post('/add_equipment', 'Restroscontroller@add')->name('add_equipment');
Route::get('/list_equipment', 'Restroscontroller@list')->name('list_equipment');


//Vehicle or machine
Route::view('/add1', 'hire/add1');
Route::post('/add_machine', 'Restroscontroller@add1')->name('add_machine');
Route::get('/list_machine', 'Restroscontroller@list1')->name('list_machine');

});