<?php

namespace App\Entity;



class Article{
  private $id;
  private $titre;
  private $image;
  private $text;
  private $categorie;
  private $price;


  public function getId(){
    return $this->id;
  }
  public function setTitre($titre){
    $this->titre = $titre;
    return $this;
  }
  public function getTitre(){
    return $this->titre;
  }
  public function setImage($image){
    $this->image = $image;
    return $this;
  }
  public function getImage(){
    return $this->image;
  }
  public function setText($text){
    $this->text = $text;
    return $this;
  }
  public function getText(){
    return $this->text;
  }
  public function setCategorie($categorie){
    $this->categorie = $categorie;
    return $this;
  }
  public function getCategorie(){
    return $this->categorie;
  }
  public function setPrice($price){
    $this->price = $price;
    return $this;
  }
  public function getPrice(){
    return $this->price;
  }

}
?>