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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
