<?php


	if(isset($_POST['submit'])){

		$name 		= $_POST['myName'];

		if($name == ""){
			echo "null submission...";
		}else{
			echo "Name:".$name;
		}

	}else{
		echo "Invalid request...";
	}
?> 