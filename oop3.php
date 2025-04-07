<?php

// crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:

// le classi non devono avere attributi;
// ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
// non puoi realizzare metodi definiti public per stampare il risultato;
// l’unico metodo public ammesso e' il costrutture.

class Vertebrates{
    public function __construct(){
    $this->printVertebrate();
}
    protected function printVertebrate(){
        echo "Sono un animale vertebrato. \n";
    }
}

class WarmBlood extends Vertebrates{
    public function __construct(){
        parent::__construct();
        $this->printWarmBlood();
    }

    protected function printWarmBlood(){
        echo"Sono un animale a sangue caldo. \n";
    }
}

class ColdBlood extends Vertebrates{
    public function __construct(){
        parent::__construct();
        $this->printColdBlood();
    }

    protected function printColdBlood(){
        echo"Sono un animale a sangue freddo. \n";
    }
}

class Mammal extends WarmBlood{
    public function __construct(){
        parent::__construct();
        $this->printMammal();
        
    }
    protected function printMammal(){
    echo"Sono un mammifero. \n";
    }
}

class Lion extends WarmBlood{
    public function __construct(){
        parent::__construct();
        $this->printLion();
        
    }
    protected function printLion(){
    echo"Sono un leone. \n";
    }
}

class Bird extends WarmBlood{
    public function __construct(){
        parent::__construct();
        $this->printBird();
        
    }
    protected function printBird(){
    echo"Sono un uccello. \n";
    }
}

class Fish extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->printFish();
        
    }
    protected function printFish(){
    echo"Sono un pesce...Splash! \n";
    }
}

class Reptile extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->printReptile();
        
    }
    protected function printReptile(){
    echo"Sono un serpente. \n";
    }
}

class Amphibian extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->printAmphibian();
        
    }
    protected function printAmphibian(){
    echo"Sono una rana. \n";
    }
}

$lion = new Lion();
$serpente = new Reptile();
$fish = new Fish();