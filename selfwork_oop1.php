<?php
//Crea una classe Company che abbia i seguenti attributi pubblici:
//name: nome dell’azienda;
//location: stato in cui e' ubicata la sede dell’azienda;
//tot_employees: numero di dipedenti assunti in quella sede (di default, 0);
//Crea 5 istanze di 5 aziende diverse
//Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendendi, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;
//Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa annuale e la stampi per ogni oggetto.
//Implementa un nuovo metodo che e' in grado di calcolare l’insieme totale delle spese di tutte le aziende create.
//Implementa un metodo statico che permetta di stampare a terminale questo totale assoluto di tutte le aziende messe insieme.

class Company{

   public $name;
   public $location;
   public $tot_employees;
   public static $avg_salary = 1500;
   public static $total = 0;

   public function __construct($nome, $sede, $dipendenti){
      $this->name = $nome;
      $this->location = $sede;
      $this->tot_employees = $dipendenti;
   }

      public function checkTotEmployees($int1, $int2){
         if ($int1 > $int2) {
            return true;
         }
         return false;
      }

      public function printTotEmployees($num = 0){
         if ($this->checkTotEmployees($this->tot_employees, $num = 0)) {
            echo "L'azienda $this->name con sede in $this->location ha $this->tot_employees dipendenti. \n ";
         }else {
            echo "L'azienda $this->name con sede in $this->location non ha abbastanza dipendenti. \n";
         }
      }
      public function calculateAnnualCost($int){
         return $this->tot_employees * (self::$avg_salary * $int);
      }
      public function printCalculatedAnnualCost($month = 12){
         echo "----$this->name----\n";
         echo "Il costo annuale dell'ufficio $this->name è di ".$this->calculateAnnualCost($month) . " euro \n";
      }

      public function calculateProgressiveCost($month = 12){
         return self::$total +=$this->calculateAnnualCost($month);
      }
      public static function printCalculatedFinalTotal(){
         echo "La Holding ha una previsione di spesa pari a:"
. self::$total . "\n";     }
   }
   $company1 = new Company('Aulab', 'Italia', 50);
   $company2 = new Company('Nintendo', 'Giappone', 25);
   $company1->printTotEmployees();
   $company2->printTotEmployees();
   // $company1->printCalculatedAnnualCost();
   $company2->calculateProgressiveCost();
   $company1->calculateProgressiveCost();
   Company::printCalculatedFinalTotal();




