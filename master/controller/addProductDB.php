<?php
use Master;
require_once '../db.php';

        if(isset($_POST)){

           
            $productCode = $_POST['product_code'];
            $productName = $_POST['product_name'];
            $product_desc = $_POST['product_desc'];
            $product_price = $_POST['product_price'];
            $product_price = $product_price. ' $';
    
           
            $database = new Master\db();
            
            
          
               
                $database->insertData($productCode, $productName, $product_price, $product_desc);
            
                
          
           
        }
    ?>