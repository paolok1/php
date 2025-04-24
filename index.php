<?php

require_once('class.php');

class Post{
    private $title;
    private $category;
    private $tag;

    public function __constructor($titolo, Category $categoria, $tag){
        $this->title = $titolo;
        $this->category = $categoria;
        $this->tag = $tag;
    }

    public function getTitle(){
       echo "$this->title \n";
    }

    public function getCategory(){
       echo "$this->category->GetMyCategory()";
    }

    public function getTag(){
        echo"$this->tag \n";
    }
}
$post = new Post("Titolo", new Attuality(), "tag \n");
$post1 = new Post("Titolo2", new Gossip(), "tag2 \n");

$post->getCategory();
$post1->getTitle();