<?php


require_once 'Product.php';
require_once 'Furniture.php';
require_once 'Book.php';
require_once 'Dvd.php';



$type= $_GET["type"];
$values = $_GET["values"];

$type = new $type();
print $type->size($values). PHP_EOL;


		

?>
