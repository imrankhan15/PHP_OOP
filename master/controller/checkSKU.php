<?php 
use Master;
require_once '../db.php';

$database = new Master\db();
            
   
$sku= $_GET["sku"];


 
if($database->findData($sku)==false){

    print_r('ok');

    
}
else {
   print_r('notOk');
   
}


?>