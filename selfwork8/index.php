<?php

trait Calculator
{
    public function sum($a, $b) {
        return $a + $b;
      }
      
      public function sub($a, $b) {
        return $a - $b;
      }
      
      public function mul($a, $b) {
        return $a * $b;
      }
      
      public function div($a, $b) {
        return $a / $b;
      }
      
      public function sqr($a){
        return sqrt($a);
      }
}

class Rectangle{
    use Calculator;

    public $base;
    public $height;

    public function __construct($b, $h){
        $this->base = $b;
        $this->height = $h;
    }

    public function area(){
        return $this->mul($this->base, $this->height);

    }

    public function perimeter(){
        $sum = $this->sum($this->base, $this->height);
        $result = $this->mul($sum, 2);
        return $result;
    }

    public function diagonal(){
        $base1 = $this->base**2;
        $altezza1 = $this->height**2;
        $tot= $this->sum($base1,$altezza1);
        $result = $this->sqr($tot);
        return $result;
    }
}

$rettangolo = new Rectangle(10, 4);
echo $rettangolo->area() . "\n";
echo $rettangolo->perimeter() . "\n";
echo $rettangolo->diagonal() . "\n";
