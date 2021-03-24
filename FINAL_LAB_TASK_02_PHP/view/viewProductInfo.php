<?php
	
	
	
	require_once('../model/productModel.php');
	$product = getAllProduct();

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Product</title>
</head>
<body>
<div id="main_content">
	
  <table border="1">
    <tr>
      
      <td>NAME</td>
      <td>PROFIT</td>
      
    </tr>
    
    <?php for($i=0; $i < count($product); $i++){ ?>
    <tr>
      <td><?=$product[$i]['name']?></td>
      <td><?=$product[$i]['profit']?></td>
      <td><a href="editProduct.php?id=<?= $product[$i]['id']?>"> EDIT </a> </td>
      <td><a href="deleteProduct.php?id=<?= $product[$i]['id']?>"> DELETE </a> </td>   
    </tr>

    <?php } ?>
  </table>
    
</div>
</body>
</html>
