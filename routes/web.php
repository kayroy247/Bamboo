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
    return view('welcome');
});

Route::get('/users', function () {

    return view('users', ['users' => App\User::all()]);

});

Route::get('/cars', function () {

    $cars = DB::table('cars')

               ->join('users', 'users.id', 'cars.id')

               ->select('users.name', 'users.email', 'cars.*')

               ->get();

    return view('cars', ['cars' => $cars]);

});