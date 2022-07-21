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
Route::get('hulladekrol-altalanossagban', function (){
    return view('hulladekrol-altalanossagban');
});
Route::get('hogyan-elozzuk-meg-a-hulladek-keletkezeset', function (){
    return view('hogyan-elozzuk-meg-a-hulladek-keletkezeset');
});
Route::get('elelmiszerpazarlas', function (){
    return view('elelmiszerpazarlas');
});
Route::get('tudatos-vasarlas', function (){
    return view('tudatos-vasarlas');
});
Route::get('tippek-trukkok', function (){
    return view('tippek-trukkok');
});
Route::get('szelektiv-hulladekgyujtes', function (){
    return view('szelektiv-hulladekgyujtes');
});


Route::prefix('gyerekeknek')->group(function () {
    Route::get('/tudtad-e', function (){
        return view('gyerekek');
    });
    Route::get('/kviz', function (){
        return view('kviz');
    });
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
