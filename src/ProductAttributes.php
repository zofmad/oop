<?php

namespace Oop;

require_once("AttributesInterface.php");

class ProductAttributes implements AttributesInterface{

  private $attributes = [];

//dodaje obiekt do kolekcji
  public function setAttribute($attribute){
    $this->attributes[] = $attribute;
  }
    //zwraca kolekcje
  public function getAttributes(){
    return $this->attributes;
  }

  public function deleteAttributes(){
    $this->attributes = [];
  }





}
