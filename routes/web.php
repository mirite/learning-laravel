<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('welcome', ['listings' => \App\Models\Listing::all()]);
});

Route::get('/about/{name}', function ($name) {
    return view('welcome', ['name'=>$name]);
})->where('name','[a-z]+');
