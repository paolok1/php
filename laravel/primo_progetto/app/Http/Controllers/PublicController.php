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
    $arraySponsor = [
      ['id'=> 1 , 'name'=> 'Nike', 'city'=> 'Milano', 'logo'=>'/nike.jpg'],
      ['id'=> 2 , 'name'=> 'Ellesse', 'city'=> 'Roma', 'logo'=>'/ellesse.jpg'],
        ['id'=> 3,'name'=> 'Maybeline', 'city'=> 'New York', 'logo'=>'/maybelline.png'],
        ['id'=> 4, 'name'=> 'Guess', 'city'=> 'Londra', 'logo'=>'/guess.jpg'],
    ];
    return view('chiSiamo', ['sponsor'=> $arraySponsor]);

    
  }
  public function dettaglio($id){
       $arraySponsor = [
        ['id'=> 1 , 'name'=> 'Nike', 'city'=> 'Milano', 'logo'=>'/nike.jpg'],
        ['id'=> 2 , 'name'=> 'Ellesse', 'city'=> 'Roma', 'logo'=>'/ellesse.jpg'],
        ['id'=> 3,'name'=> 'Maybeline', 'city'=> 'New York', 'logo'=>'/maybelline.png'],
        ['id'=> 4, 'name'=> 'Guess', 'city'=> 'Londra', 'logo'=>'/guess.jpg'],
    ];
    foreach ($arraySponsor as $marchio) {
      if ($id == $marchio['id']) {
      return view('sponsor.sponsorDetail', ['marchio'=>$marchio]);
    }
  }
}
       

  


}
