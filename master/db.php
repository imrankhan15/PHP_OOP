<?php
namespace Master;
session_start();

class db {
    public $conn;
    public $host;
    public $user;
    public $password;
    public $baseName;
    
    function __construct() {
        $this->conn = false;
      
        $this->connect();
    }
    
    function connect() {
            $this->conn  = mysqli_connect($this->host, $this->user, $this->password, $this->baseName);
            if (!$this->conn) {
                $this->status_fatal = true;
                die();
            } 
            else {
                $this->status_fatal = false;
            }
        
        return $this->conn;
    }

    function findData($productCode){

        $results = $this->conn->query("SELECT COUNT(*) AS co FROM products WHERE product_code='$productCode'");
		$obj = $results->fetch_object();

        if($obj->co > 0){
            return true;
        }
        else {
            return false;
        }
    }

   
    function insertData($productCode, $productName, $product_price, $product_desc){
            $sql = "INSERT INTO products (product_code, product_name, price, product_desc  ) VALUES (?,?,?,?)";
            $stmt = mysqli_stmt_init( $this->conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                
            } else {
                mysqli_stmt_bind_param($stmt, "ssss", $productCode, $productName,  $product_price, $product_desc);
             
                $execution = $stmt->execute();
                if ( $execution === false ) {
                   
                    exit();
                }
                $stmt->close();
                $_SESSION['data'] = 5;
                echo "<script>location='https://trendsmartbd.com/'</script>";
                
            }
    }
    function deleteData($array){
        
            if(sizeof($array) == 0){
                echo "<script>location='https://trendsmartbd.com/'</script>";
                
            }
            else {
                foreach($array as $key){
                    $id = $key;
                    $sql = "DELETE FROM products WHERE id = ?";
                    $stmt = mysqli_stmt_init( $this->conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                       
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "s", $id);
                        $execution = $stmt->execute();
                        print_r($key);
                        $stmt->close();
                        $_SESSION['data'] = 5;
                        echo "<script>location='https://trendsmartbd.com/'</script>";
                
                    }
            }
            
        }	
    }

    function selectData(){

        $results = $this->conn->query("SELECT id, product_code, product_name, product_desc,  price FROM products ORDER BY id ASC");
			if($results){ 
				$products_item = '<ul class="products">';
                while($obj = $results->fetch_object())
                {
                    $products_item .= <<<EOT
                        <li class="product">
                        <input class="delete-checkbox" type="checkbox" name="remove_code[]" value="$obj->id" /><h3>{$obj->product_code}</h3>
                        <div class="product-content"><h3>{$obj->product_name}</h3>
                        <div class="product-content"><h3>{$obj->price}</h3>
                        <div class="product-content"><h3>{$obj->product_desc}</h3>
                        </li>
                    EOT;
                }
                $products_item .= '</ul>';
                echo $products_item;
           
        }
    }
}


?>
