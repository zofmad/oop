<?php

namespace Oop;

 // require_once("Product.php");
 //  require_once("Vehicle.php");


class Collection implements \Iterator {
  private $collection = [];
  private $position = 0;
  private $sort = false;


  //iterator
  public function __construct() {
    $this->position = 0;
}

   function rewind() {
    //  var_dump(__METHOD__);
      $this->position = 0;
   }
   function current() {
    //  var_dump(__METHOD__);
    return $this->collection[$this->position];
   }
   function key() {
    //  var_dump(__METHOD__);
     return $this->position;
   }
   function next() {
    //  var_dump(__METHOD__);
    ++$this->position;
   }
   function valid() {
    //  var_dump(__METHOD__);
    return isset($this->collection[$this->position]);
   }

   //iterator



  public function add($obj){
    $this->collection[] = $obj;
  }
  public function sort($anonFunction) {
    $this->sort = true;

      for($i=0;$i<count($this->collection);$i++){
        $attributesArray = $this->collection[$i]->getAttributes();
        usort($attributesArray, $anonFunction);
        $this->collection[$i]->deleteAttributes();
        for($j=0;$j<count($attributesArray);$j++){
          $this->collection[$i]->setAttribute(new ProductAttribute($attributesArray[$j]->getName(), $attributesArray[$j]->getValue()));
        }

      }


  }


  public function __toString(){
    $string = "
    <table border='1' style='text-align: center'>
    <tr>
      <th colspan='2'><b>Objects in collection:</b></th>
    </tr>";


    for($i=0;$i<count($this->collection);$i++){
      $string.="<tr>
                  <td colspan='2'>Object ".($i+1)."</td>
                </tr>
                <tr>
                  <td colspan='2'>Attributes</td>
                </tr>
                <tr>
                  <th>name</th>
                  <th>value</th>
                </tr>";
      if($this->sort){
        $attributesArray = $attributesArray = $this->collection[$i]->getSortedAttributes();
      }
      else{
        $attributesArray = $this->collection[$i]->getAttributes();
      }
      $attributeWithNameNameId = -1;
      for($j=0;$j<count($attributesArray);$j++){
        if($attributesArray[$j]->getName() =='name'){
          $string.="<tr>
                      <td>".$attributesArray[$j]->getName()."</th>
                      <td>".$attributesArray[$j]->getValue()."</th>
                    </tr>";
                    $attributeWithNameNameId = $j;
                }

        }

      for($j=0;$j<count($attributesArray);$j++){
        if($j != $attributeWithNameNameId){
          $string.="<tr>
                      <td>".$attributesArray[$j]->getName()."</th>
                      <td>".$attributesArray[$j]->getValue()."</th>
                    </tr>";
                  }
                }
              }
    $string.="</table>";
    return $string;


}
}
