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

//Hiring Website
//Route::get('/', 'Restroscontroller@index');
Route::get('/contact', 'Restroscontroller@contact');

//Equipments
Route::view('/add', 'hire/add');
Route::post('/add', 'Restroscontroller@add');
Route::get('/', 'Restroscontroller@list');

//Vehicle or machine
Route::view('/add1', 'hire/add1');
Route::post('/add1', 'Restroscontroller@add1');
Route::get('/v', 'Restroscontroller@list1');


//register
Route::view('/register', 'hire/register');
Route::post('/register', 'Restroscontroller@register');

//Products
//Route::resource('products','ProductController');

//Route::get('/sample/{id}', function ($id) {
//  echo $id;
//  return view('sample');
//  });

//create link using anchor tag
//Route::view('sample','user');

//how to direct the page (Method 1)
/*Route::get('sample', function () {
  
    return view('user');
});
//Route::redirect('/','user');


Route::get('/', function () {
   // return view('welcome');
   return redirect('sample');
});

*/
// for form and validation
// Route::view('account', 'user');
// Route::post('UserController', 'UserController@index');

//for if_else, forweach and for loop
//Route::get('users', 'UserController@index');

// for common layout
// Route::view('/home','commonLayout/home');
// Route::view('/about','commonLayout/about');

// for global Middleware 
//Route::view('/noaccess', 'mWare/noaccess');

//for  group middleware
// Route::group(['middleware'=>['customAuth']], function(){

//     Route::get('/', function () {
//         return view('welcome');
//     });
//     Route::view('/tashi', 'tashi');
// });

// Route Middleware
// Route::view('/tashi', 'mWare/tashi') -> middleware('customAuthRoute');

//csrf_token
// Route::view('/forms','form/csrf');
// Route::post('/forms','users@index');

//API Routes
// Route::get('/api','profiles@index');

//Login_Session has used csrf.php.blade
// Route::view('/forms','form/csrf');
// Route::post('/forms','users@index');
//Route::view('login','session/login');


// Route::get('login/', function () {
//     if(!session()->has('data')){
//          return  redirect('forms');
//     }
//          return view('session/login');
//  });
// Route::get('/logout', function () {
//     session()->forget('data');

//     return  redirect('forms');
// });

// Seeion through middleware
// Route::group(['middleware'=>['SessionAuth']], function(){
//     Route::view('login','session/login');

//     Route::get('/', function () {
//         return view('welcome');
//     });
// });
//  Route::view('tasks','flashSession/task');
//  Route::post('tasks','tasks@index');

//Localization
//Route::view('local','localization/local');

//to get input from the user by typing en or hi page directly.
// Route::get('/local/{lang}', function ( $lang) {
//     App::setlocale($lang);
//     return view('localization/local');
// });

// To upload a file
// Route::post('/file','Uploadsfile@index');
// Route::view('/file','uploadFile/file');

//Database Connection
//Route::get('/info','infos@index');
//Route::view('info','listDatabseView/users');







