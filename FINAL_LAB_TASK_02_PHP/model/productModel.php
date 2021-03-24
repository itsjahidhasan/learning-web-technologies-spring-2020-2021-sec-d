<?php
	
	require_once('db.php');


	function insertProduct($product){
		$conn = getConnection();
		$sql = "insert into product values('', '{$product['name']}', '{$product['bPrice']}', '{$product['sPrice']}', '{$product['profit']}','{$product['display']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getProductByID($id){
		$conn = getConnection();
		$sql = "select * from product where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from product";
		$result = mysqli_query($conn, $sql);
		$product = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($product, $row);
		}

		return $product;
	}

	function updateProduct($product){
		$conn = getConnection();
		$sql = "update product set name='{$user['name']}', bPrice='{$user['bPrice']}', sPrice='{$user['sPrice']}', profit='{$user['profit']}', display='{$user['display']}' where id={$user['id']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from product where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>