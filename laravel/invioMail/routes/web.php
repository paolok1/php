<?php

use App\Http\Controllers\PublicController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('home');

// rotta pagina contatti
Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');

// rotta mail

Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');

//Rotta thank you page

Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou.page');