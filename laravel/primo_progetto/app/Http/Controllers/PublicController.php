<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
     public function homepage () {
    $title = 'HACK 142';
    return view('welcome', ['titolo'=> $title]); 
 }
// passaggio di dati alla vista (view)
// CHIAVE DELL'ARRAY = NOME DELLA VARIABILE SULLA VISTA.
// Valore = il nome in sè.
 public function chiSiamo () {
    $arrayEmployees = [
        ['name'=> 'Marco', 'surname'=> 'Polo'],
        ['name'=> 'Cristoforo', 'surname'=> 'Colombo'],
        ['name'=> 'Amerigo', 'surname'=> 'Vespucci'],
        ['name'=> 'Ferdinando', 'surname'=> 'Magellano'],
    ];
    return view('chiSiamo', ['employees'=> $arrayEmployees]);
  }

 public function contatti () { 
    $arrayContacts = [
        ['name'=>'Cristoforo', 'surname'=>'Colombo', 'phone'=>'3332223232', 'foto'=>'/colombo1.jpg', 'alt'=>'immagine Cristoforo Colombo'],
        ['name'=>'Marco', 'surname'=>'Polo', 'phone'=>'2223334343', 'foto'=>'/Polo.jpg', 'alt'=>'immagine Marco Polo '],
        ['name'=>'Amerigo', 'surname'=>'Vespucci', 'phone'=>'34333344465', 'foto'=>'/Vespucci.jpg', 'alt'=>'immagine Amerigo Vespucci'],
        ['name'=>'Ferdinando', 'surname'=>'Magellano', 'phone'=>'555434323', 'foto'=>'/Magellano.jpg', 'alt'=>'immagine Ferdinando Magellano'],

    ];
        return view('contatti', ['contacts'=>$arrayContacts]);
 }
}
