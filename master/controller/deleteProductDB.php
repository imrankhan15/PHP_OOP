<?php
use Master;
require_once '../db.php';


if( isset($_POST["remove_code"]))
{
	print_r($_POST["remove_code"]);
	
	if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){

        
        $database = new Master\db();
        $database->deleteData($_POST["remove_code"]);
	}
}
else {
	header("Location: ../index.php");  
}




?>