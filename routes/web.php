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
    return view('accueil');
})->name('accueil');



Route::get('accueil', function () {
    return view('accueil');
});

Route::get('Formactu', function () {
    return view('Formactu');
});

Route::get('listeactu', function () {
    return view('listeactu');
});
Route::get('Formfilm', function () {
    return view('Formfilm');
});
Route::get('listefilm', function () {
    return view('listefilm');
});