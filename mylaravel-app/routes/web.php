<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/greeting', function () {
    // u can write the logic here
    // however, this is not a best practice
    $a = 1; $b = 2;
    $c = $a + $b;
    return 'Hello World!' . $c;
});

Route::get('/user',  //this is a path
 [
    Controller::class, //this is the controller
 'index' // the function of the controller
]
);