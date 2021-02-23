<?php
	
	if(isset($_POST['Submit']))
	{
		$currentPassword = $_POST['cPass'];
		$newPassword = $_POST['newPass'];
		$retypeNewPassword = $_POST['retypePass'];
    if($currentPassword=="" and $newPassword="" and $retypeNewPassword){
      echo"Fields can not be empty";
    }
    else{
		if($currentPassword !== $newPassword && $newPassword == $retypeNewPassword)
		{
			echo "Successfully Changed";
		}
        else
        {
            echo "Please Try Again";
        }
	  }
}
?>