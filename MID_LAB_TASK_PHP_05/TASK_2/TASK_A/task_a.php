<?php

	

	if(isset($_POST['submit'])){

		$Ename 		= $_POST['myEmail'];

		if($Ename == ""){
			echo "null submission...";
		}else{
			echo "Email:".$Ename;
		}

	}else{
		echo "Invalid";
	}
?> 