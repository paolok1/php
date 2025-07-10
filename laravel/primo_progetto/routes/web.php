<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TeachersController;

// file di ROUTING

// ROTTA NOMINALE: si utilizza il metodo name() per dare il nome ad una rotta, concatenandolo 
// alla rotta esistente (la 'function') attraverso: ->name('')
// Quindi: Route::get('/', function () {
    // return view('welcome');
// })->name('homepage');

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// rotta sponsor
Route::get('/Chi-Siamo', [PublicController::class, 'chiSiamo'])->name('chi.siamo');
route::get('/sponsor/dettaglio/{id}', [PublicController::class, 'dettaglio'])->name('sponsor.detail');
// rotta docenti
Route::get('/docenti',[TeachersController::class, 'docenti'])->name('teachers');

// pagina di dettaglio dei docenti
// ROTTA PARAMETRICA è una rotta che accetta un parametro.

Route::get('/docenti/dettaglio/{surname}', [TeachersController::class, 'dettaglio'])->name('teacher.detail');




