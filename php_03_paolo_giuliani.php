<?php

//  $results = “Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

// HINT:
// Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.

$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
   'E'
  ],
'ritrovai',
'per'
],
'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];

$words1[]= 'Nel';
$words1[]= 'del';
$words1[]= 'cammin';
$words1[]= 'di';
$words1[]= 'nostra';
$words1[]= 'vita';
$words1[]= 'una';
$words1[]= 'selva';
$words2[]= ',';
$words2[]= 'chè';
$words2[]= 'la';
$words2[]= 'via';
$words2[]= 'smarrita.';

$results = $words1[8]." ".$words1[6][3][0]." ".$words1[9]. " ".$words1[10]. " ".$words1[11]. " ".$words1[12]. " ".$words1[13]. " ".$words1[4]. " ".$words1[6][4]." ".$words1[6][5]." ".$words1[14]." ".$words1[15]." ".$words1[6][0]." ".$words2[0]." ".$words2[1]." ".$words2[2]." ".$words2[3]." ".$words1[6][1]." ".$words2[4];
echo($results);
