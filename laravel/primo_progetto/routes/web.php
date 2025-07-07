<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\EmployeesController;
// file di ROUTING

// ROTTA NOMINALE: si utilizza il metodo name() per dare il nome ad una rotta, concatenandolo 
// alla rotta esistente (la 'function') attraverso: ->name('')
// Quindi: Route::get('/', function () {
    // return view('welcome');
// })->name('homepage');

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');



Route::get('/Chi-Siamo', [PublicController::class, 'chiSiamo'])->name('chi.siamo');

Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');

// ROTTA PARAMETRICA: è una rotta che accetta un parametro.

Route::get('/employess/dettaglio/{name}', [EmployeesController::class, 'dettaglio'])->name('employees.details');