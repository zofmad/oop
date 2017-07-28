<?php

namespace Oop;
// require_once("AbstractProduct.php");

class Vehicle extends AbstractProduct{
  // public function setAttribute($attribute){
  //   $this->attributes->setAttribute($attribute);
  // }


  public function getAttributes(){
    $attArray = $this->attributes->getAttributes();
    for($i=0; $i<count($attArray);$i++){
      for($j=$i; $j<count($attArray);$j++){
        if(strcasecmp($attArray[$i]->getValue(), $attArray[$j]->getValue()) > 0){
          $helpAttr = $attArray[$i];
          $attArray[$i] = $attArray[$j];
          $attArray[$j] = $helpAttr;
        }
      }
    }
    return $attArray;

  }

}
