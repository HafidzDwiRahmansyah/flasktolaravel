<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    $response = Http::get('http://localhost:5000/api/data'); // Sesuaikan dengan URL Flask Anda
    $data = $response->json();
    return view('welcome', ['message' => $data['message']]);
});
