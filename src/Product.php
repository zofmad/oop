<?php

require_once("AbstractProduct.php");

class Product extends AbstractProduct{

  // public function setAttribute($attribute){
  //   $this->attributes->setAttribute($attribute);
  // }

  public function getAttributes(){
    $attArray = $this->attributes->getAttributes();
    for($i=0; $i<count($attArray);$i++){
      for($j=$i; $j<count($attArray);$j++){
        if(strcasecmp($attArray[$i]->getName(), $attArray[$j]->getName()) > 0){
          $helpAttr = $attArray[$i];
          $attArray[$i] = $attArray[$j];
          $attArray[$j] = $helpAttr;
        }
      }
    }
    return $attArray;

  }



}
