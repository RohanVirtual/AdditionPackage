<?php

use Illuminate\Support\Facades\Route;
use dadirohan\SimpleMath\SimpleMathService;
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

Route::get('/sum', function(SimpleMathService $math) {
    return $math->add(3, 4); // returns 15
});
