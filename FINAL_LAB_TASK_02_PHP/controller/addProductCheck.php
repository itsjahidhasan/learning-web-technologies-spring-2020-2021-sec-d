<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		
		$name 		= $_POST['name'];
		$bPrice 		= (int)$_POST['bprice'];
		$sPrice 	= (int)$_POST['sprice'];
		$profit 	= $sPrice-$bPrice;
    $display = $_POST['display'];
    if($display = ""){
      $display = "No";
    }

		if($name == "" || $bPrice == "" || $sPrice == ""){
			echo "invalid information...please try again!";
		}else{

			
				
				$product = [
							'name'	=>$name, 
							'bPrice'		=>$bPrice, 
							'sPrice'	=>$sPrice,
							'profit'		=>$profit,
              'display' =>$display
						];

				$status = insertProduct($product);

				if($status){
					header('../view/viewProductInfo.php');
				}else{
					echo "Db error";
				}

			
		}
	}
?>