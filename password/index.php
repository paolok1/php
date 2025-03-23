<?php
// almeno 8 caratteri;


function checkLength($string){
    if(strlen($string)>=8){
        return true;
    }
    echo "La password deve contenere almeno 8 caratteri \n";
    return false;
}


// almeno un carattere maiuscolo;

function checkUpper($string){
    for ($i=0; $i<strlen($string) ; $i++) { 
        if(ctype_upper($string[$i])) {
        return true;
    }
        
    }
    echo "La password deve contenere almeno una maiuscola \n";
    return false;
}


// almeno un numero;

function checkNumber($string){
    for ($i=0; $i <strlen($string) ; $i++) { 
        if (is_numeric($string[$i])) {
            return true;
        }
    }
      echo "La password deve contenere almeno un numero \n";
      return false; 
}


// Almeno un carattere speciale;


function checkSpecial($string){
    $special_chars = ['$', '&', '%', '!', '?'];
    for ($i=0; $i <strlen($string) ; $i++) { 
        if (in_array($string[$i], $special_chars)) {
       return true;
    }
        
    }
    echo "La password deve contenere almeno uno di questi caratteri speciali ( ! , $ , % , & , ? ) \n";
    return false;
}


function checkPassword($string){
    $firstrule = checkLength($string);
    $secondrule = checkUpper($string);
    $thirdrule = checkNumber($string);
    $fourthrule = checkSpecial($string);

    if ($firstrule && $secondrule && $thirdrule && $fourthrule) {
        echo " Password accettata \n";
    }
    return $firstrule && $secondrule && $thirdrule && $fourthrule;
}

do {
    $password = readline("Inserici la tua password: \n");
} while (!checkPassword($password));
    
        