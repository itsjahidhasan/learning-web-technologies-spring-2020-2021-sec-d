<?php


  session_start();
if ( isset ( $_POST [ 'submit' ] ) ) {

	$userName =  $_POST [ 'username' ];
	$password =   $_POST [ 'password' ];

	
	
    if ($userName == "" && $password == "") {
    	echo "Please fill the blanks";
    }
	else{
		 $jsonFile= fopen("users.json","r");
		 $jsonRead= fread($jsonFile,filesize("users.json"));

		 $userValue = json_decode($jsonRead, true);

		 if ( $password == $userValue ['password'] && $userName == $userValue ['userName'] ) {
		 	header('location: dashboard.php');
		 }
		 else{
		 	echo "Password and Username didn't match";
		 }
		 fclose($jsonFile);
	}
   
}


?>