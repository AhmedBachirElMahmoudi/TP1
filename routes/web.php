<?php

use App\Http\Controllers\Stagiaire;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [Stagiaire::class, 'formul']);
Route::get('/stagiaires', [Stagiaire::class, 'getStag'])->name('stagiaires');
Route::post('/form', [Stagiaire::class, 'addStag'])->name('addStag');
Route::get('/stagiaires/{id}', [Stagiaire::class, 'showStag'])->name('show.stag');
Route::get('/stagiaires/{stagiaireModel}/edit', [Stagiaire::class, 'editStag'])->name('edit.stag');
Route::put('/stagiaires/{stagiaireModel}', [Stagiaire::class, 'updateStag'])->name('updateStag');
Route::delete('/stagiaires/{stagiaireModel}', [Stagiaire::class, 'deleteStag'])->name('delete.stag');
