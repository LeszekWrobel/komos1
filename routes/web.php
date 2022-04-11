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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/', 'CommissionsController@index');

//Route::get('/home', [App\Http\Controllers\CommissionsController::class, 'home']);


Route::get('/about', function () {
    return '<h4>About Us</h4>';
});

//Route::get('/store', function () {
//Route::get('/home', function () {
 //   $product = strip_tags(request('product')) ;
    //return '<h4>About '.$product.'</h4>';
 //   return view('/home');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resourse('POST',  [App\Http\Controllers\CommissionsController::class]);
//Route::resourse('POST',  'CommissionsController');
//Route::resourse('POST',  App\Http\Controllers\CommissionsControlle);

Route::get('/', [App\Http\Controllers\CommissionsController::class, 'index']);
Route::resource('/commissions', 'App\Http\Controllers\CommissionsController');

