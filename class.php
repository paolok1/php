<?php

abstract class Category{
    abstract public function GetMyCategory();
}

class Attuality extends Category{
    public function GetMyCategory(){
        echo "Attualità \n";
    }
}


class Sport extends Category{
    public function GetMyCategory(){
        echo "Sport \n";
    }
}

    

class Gossip extends Category{
    public function GetMyCategory(){
        echo "Gossip \n";
    }
}

class History extends Category{
    public function GetMyCategory(){
        echo "Storia \n";
    }
}
// $attualita = new Attuality();
// $attualita->GetMyCategory();
// $gossip = new Gossip();
// $gossip->GetMyCategory();
// $sport = new Sport();
// $sport->GetMyCategory();
// $storia = new History();
// $storia->GetMyCategory();










