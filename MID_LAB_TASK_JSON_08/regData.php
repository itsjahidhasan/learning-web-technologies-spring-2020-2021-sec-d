<?php


    session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
	$email =$_POST [ 'email' ];
	$userName =$_POST [ 'uname' ];
	$password =$_POST [ 'pword' ];
	$confirmPassword = $_POST [ 'conpword' ];
	$gender = "";
	if(isset($_POST['radio'])){
			  $gender =  $_POST [ 'gender' ];
			}
    $day    =   $_POST [ 'date'] ;
	  $month  = $_POST [ 'month'];
	  $year   = $_POST [ 'year' ] ;
    $dateOfBirth = [ $day , $month , $year ];



    if ( $name == "" || $email == "" || $userName == "" || $password == "" || $confirmPassword == ""|| empty($dateOfBirth)) {
 	echo "Filled all the file... ";
 }
 elseif ( $password != $confirmPassword) {
 	echo "Password didn't match with confirm Password ";
 }
 else{
 	$users = [	
			                'name'=>$name, 
                      'userName'=>$userName, 
                      'email'=> $email,
                      'password'=>$password, 
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,

						];

	$userJson= json_encode( $users );
	$jsonFile= fopen( "users.json", "w" );
	fwrite($jsonFile , $userJson);
	fclose($jsonFile);
    header('location: Login.html');
 }

}

?>