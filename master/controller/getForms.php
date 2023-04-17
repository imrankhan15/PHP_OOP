<?php


require_once 'Product.php';
require_once 'Furniture.php';
require_once 'Book.php';
require_once 'Dvd.php';

$type=$_GET["type"];
$type = new $type();
print $type->forms(). PHP_EOL;
exit;
?>
