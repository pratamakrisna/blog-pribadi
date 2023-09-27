<?php

use Illuminate\Support\Facades\Route;

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

// ROUTES HOME

Route::get('/', function () { return view('admin.home', [ "title" => "Home" ]); });
Route::get('/jasa', function () { return view('admin.jasa', [ "title" => "Jasa" ]); });
Route::get('/kursus', function () { return view('admin.kursus', [ "title" => "Kursus" ]);; });
Route::get('/konsultasi', function () { return view('admin.konsultasi', [ "title" => "Konsultasi" ]);; });
