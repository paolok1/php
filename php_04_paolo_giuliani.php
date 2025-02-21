<?php
// Dato un array contenente una serie di array 
// associativi di utenti con nome, cognome e genere, 
// per ogni utente stampare “Buongiorno Sig. Nome Cognome” 
// o “Buongiorno Sig.ra Nome Cognome” 
// o “Buongiorno Nome Cognome” a seconda del genere.

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'x'],
    ['name' => 'Gegia', 'surname' => 'Lopiglia', 'gender' => 'f'],
    ['name' => 'Rocco', 'surname' => 'Lodà', 'gender' => 'm']
  ];

  foreach($users as $user){
        if ($user['gender'] == 'm') {
            echo "Buongiorno Sig." . " " . $user['surname'] . " " . $user['name'] ."\n";
        } elseif ($user['gender'] =='f') {
            echo "Buongiorno Sig.ra" . " " . $user['surname'] . " " . $user['name'] . "\n";
        }else{
            echo "Buongiorno" . " " . $user['surname'] . " " . $user['name'] . "\n";
        };
        
  }