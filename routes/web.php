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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'manual'], function(){
    Route::get('/inicio', function(){ return view('layouts/manual/manual'); });
    Route::get('/inicio', function(){ return view('manual/inicio'); })->name('manual.home');
    Route::get('/usuario', function(){ return view('manual/usuario'); })->name('manual.users');
    Route::get('/projeto', function(){ return view('manual/projeto'); })->name('manual.projects');
    Route::get('/convite', function(){ return view('manual/convite'); })->name('manual.invites');
    Route::get('/desafio', function(){ return view('manual/desafio'); })->name('manual.challenges');
});