<?php



require 'vendor/autoload.php';

use Oop\Vehicle;
use Oop\Collection;
use Oop\Product;
use Oop\ProductAttributes;
use Oop\ProductAttribute;

use Oop\AbstractProduct;
use Oop\AttributesInterface;
use Oop\Collection\Iterator;
//autoloader
// spl_autoload_register(function ($class) {
//     include './src/' . $class . '.php';
// });

// phpinfo();
// die();
$objVeh = new Vehicle();
$objVeh->setAttribute(new ProductAttribute("a", "c"));
// var_dump($obj);

$objVeh->setAttribute(new ProductAttribute("name", "name"));
$objVeh->setAttribute(new ProductAttribute("name2", "asal"));

// var_dump($objVeh->getAttributes());
// echo '<br>';

$objProd = new Product();
$objProd->setAttribute(new ProductAttribute("a", "c"));
// var_dump($obj);

$objProd->setAttribute(new ProductAttribute("name", "alal"));
$objProd->setAttribute(new ProductAttribute("blalala", "asal"));
$objProd->setAttribute(new ProductAttribute("blalala", "asal"));

// echo '<br>';
// var_dump($objProd->getAttributes());

$collection = new Collection();
$collection->add($objVeh);
$collection->add($objProd);

//od Bartka Marciniuka : "chodzilo mi o sortowaniu po nazwie atrybutu, a nie ilosci atrybutow. "
$collection->sort(function($a, $b){
  // if(count($a->getAttributes()) == count($b->getAttributes())){
  //   return 0;
  // }
  // return (count($a->getAttributes()) > count($b->getAttributes()))? -1 : 1;

  return strcmp($a->getName(), $b->getName());

});


echo $collection;

echo "Collection:<br>";
var_dump($collection);


foreach($collection as $key => $value) {
     var_dump($key);
     echo "<br><br>";
     var_dump($value);
     echo "<br><br>";
}
