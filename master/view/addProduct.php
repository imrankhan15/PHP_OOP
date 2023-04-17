<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Add</title>
    <link rel="stylesheet" type="text/css" href ="../style/style.css">
    <script src="../javascript/jquery.js"></script>
    <script src="../javascript/addProd.js"></script> 
</head>
<body>

</br> 
</br>   

<form id="product_form" method="post"  action="../controller/addProductDB.php">


    <div class="navBarWrapper">
  <div class="top bar">
    <ul class="left">
      <li class="title">Add Product</li>
    </ul>
    <ul class="right">
      <li class="buttons">
	  <a href="../index.php">Cancel</a>
	</li>
      <li class="buttons"> 
      <button type="submit" onmouseover="productDesc()" onclick="return productDescAlert()">Save</button> 
	</li>
    </ul>
  </div>
</div>

    </br> 
    </br>   
    </br> 
    </br>   
 
    </br> 
    </br>   
    <hr/>
    <div class="main-form">
   <input id="sku" type="text" name="product_code" placeholder="SKU">
   </br> 
    </br>   
   <input id="name" type="text" name="product_name" placeholder="Name">
   </br> 
    </br>   
   <input type="text" id="price" name="product_price" placeholder="Price">
   </br> 
    </br>   
   <input type="hidden" id="desc" name="product_desc" >
   </br> 
   <input type="hidden" id="skuExists" name="sku_exists" value = "ok">
   </br>
    <form>
        <select id="productType" name="typeSwitch" onchange="getForm(this.value)">
            <option value=>TypeSwitcher</option>    
            <option value=Dvd>DVD</option>
            <option value=Furniture>Furniture</option>
            <option value=Book>Book</option>
        </select>
    </form>

    </br> 
    <div id="productDetails">

   
    </div>
    </div>
</form>

</body>
</html>




