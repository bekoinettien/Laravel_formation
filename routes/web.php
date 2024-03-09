<?php

use App\Http\Controllers\Monpremiercontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/text1/{name}', [Monpremiercontroller::class,'methode1'] );

/* Route::get('/accueil', function () {
    return view('accueil');
}); */
 Route::get('/accueil',[Monpremiercontroller::class,'methodeview']);
 Route::post('/accueil',[Monpremiercontroller::class,'formulaire']);