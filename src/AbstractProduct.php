<?php
 require_once("ProductAttributes.php");

abstract class AbstractProduct{
  protected $attributes;

  public function __construct(){
    $this->attributes = new ProductAttributes();
  }

  public function setAttribute($attribute){
    $this->attributes->setAttribute($attribute);
  }
  // abstract protected function setAttribute($attribute);

  abstract public function getAttributes();

//dopisana przeze mnie funkcjonalnosc usuwania atrybutow obiektu
  public function deleteAttributes(){
    $this->attributes->deleteAttributes();
  }
  public function getSortedAttributes(){
    return $this->attributes->getAttributes();
  }




}
