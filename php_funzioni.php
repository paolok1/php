<!-- Una FUNZIONE è una porzione di codice che può essere eseguita più volte durante un programma. 
 Una FUNZIONE ha 2 scopi: restituire un valore o mostrare qualcosa all'utente. Le FUNZIONI si dividono principalmente in 2 tipi:
 BUILT-IN (precostruite all'interno del codice (php, js ecc.), tipo var_dump() che mostra qualcosa all'utente) e USER FUNCTIONS.
 Definire una dichiarazione:
 1: Dichiarazione della funzione
 function nomeFunzione(){
 istruzione che deve eseguire la mia funzione}
 2: Invocazione della FUNZIONE
 nomeFunzione();
   -->
 <?php
function saluta(){
    echo "ciao a tutti \n";
}
// invocazione
saluta();

// voglio creare una funzione che mi somma due numeri:

function sommaDueNumeri($num1, $num2){
    echo $num1 + $num2;
}

sommaDueNumeri(5,4);

function sottrazione($num1, $num2){
    echo $num1 - $num2;
}

sottrazione(10,5);
sottrazione(5,10);
// 5
// -5 ( i parametri hanno valore posizionale, quindi devo stare attento a come passo i parametri)

// SCOPE : Visibilità di una variabile all'interno del nostro codice. 


?>
