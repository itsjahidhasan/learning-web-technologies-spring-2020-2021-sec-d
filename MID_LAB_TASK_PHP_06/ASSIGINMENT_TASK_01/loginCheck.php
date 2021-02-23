<?php
	if(isset($_POST['submit']))
	{
		if(strlen($_POST["username"])<2)
		{
			echo "User Name must contain at least two (2) characters<br>";
		}
		elseif(strlen($_POST['password'])<8)
		{
			echo "Password must not be less than eight (8) characters";
		}
    if(strlen($_POST["username"])>=2 and strlen($_POST['password'])>=8)
		{
			
		
		$check = false;
		for ($i=0; $i < strlen($_POST['password']); $i++) { 
			if($_POST['password'][$i] === '@' || $_POST['password'][$i] === '#' || $_POST['password'][$i] === '$' || $_POST['password'][$i] === '%')
			{
				$check = true;
				break;
				
			}
		}

		if($check === false)
		{
			echo "Password must contain at least one of the special characters (@, #, $, %)";
		}

		else{
			echo "Successful!!!!";
		}
  }
	} 
?>