<?php

// Dato il seguente codice di partenza:
// class Car {
//   private $num_telaio;
// }

// class Fiat extends Car {
//   protected $license;
//   protected $name;
// }
// Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severita' che ritieni piu' opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina e' Opel, con targa ND 123 OJ e nmero di Telaio 1234“.

class Car{
    private $num_telaio;
    protected function SetCarTelaio($string){
        return $this->num_telaio = $string;
    }
    protected function GetCarTelaio(){
        return $this->num_telaio;
    }
}

class Opel extends Car{
    protected $licence;
    protected $name;

    public function __construct($targa, $nome)
    {
        $this->licence = $targa;
        $this->name = $nome;
    }

    public function SetMyCarTelaio($string)
    {
        return $this->SetCarTelaio($string);
    }

    public function GetMycarTelaio()
    {
        return $this->GetCarTelaio();
    }

    public function PrintMessage(){
        echo"La mia auto è una $this->name con targa $this->licence e il telaio n." .$this->getMyCarTelaio() . "\n ";
    }
}

$car = new Opel("ND 123 OJ", "Opel");
$car->SetMyCarTelaio(1234);
$car->PrintMessage();
