<?php

namespace App\Entity;

class User{
  private $id;
  private $firstname;
  private $lastname;
  private $numero;
  private $mail;
  private $password;

  public function getId(){
    return $this->id;
  }
  public function setFirstname($firstname){
    $this->firstname = $firstname;
    return $this;
  }
  public function getFirstname(){
    return $this->firstname;
  }
  public function setLastname($lastname){
    $this->lastname = $lastname;
    return $this;
  }
  public function getLastname(){
    return $this->lastname;
  }
  public function setNumero($numero){
    $this->numero = $numero;
    return $this;
  }
  public function getNumero(){
    return $this->numero;
  }
  public function setMail($mail){
    $this->mail = $mail;
    return $this;
  }
  public function getMail(){
    return $this->mail;
  }
  public function setPassword($password){
    $this->password = $password;
    return $this;
  }
  public function getPassword(){
    return $this->password;
  }
}

?>