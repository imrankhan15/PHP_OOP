<?php

session_start();
use Master;

include_once("db.php");



?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product List</title>
<link href="style/style.css" rel="stylesheet" type="text/css">

</head>
<body>

<h1 align="center"></h1>

<form method="post" action="controller/deleteProductDB.php">

<div class="navBarWrapper">
  <div class="top bar">
    <ul class="left">
      <li class="title">Product List</li>
    </ul>
    <ul class="right">
      <li class="buttons">
	  <a href=view/addProduct.php>ADD</a>
	</li>
      <li class="buttons"> 
		<button id="delete-product-btn" type="submit">MASS DELETE</button>
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
	<?php include 'controller/indexRefresh.php';?>
</form>
</body>
</html>
