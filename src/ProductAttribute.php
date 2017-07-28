<?php
namespace Oop;
class ProductAttribute{

  private $name;
  private $value;
  public function __construct($newName, $newValue){
    //weryfikacja danych
      $this->name = $newName;
      $this->value =$newValue;
  }

  public function getName(){
    return $this->name;
  }
  public function getValue(){
    return $this->value;
  }







}
