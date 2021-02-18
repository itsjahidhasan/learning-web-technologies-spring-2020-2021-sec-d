<?php

	
	if(isset($_POST['submit'])){

		$name 		= $_POST['myname'];

		if($name == "" ){
			echo "null submission...";
		}else{
			echo "Name:".$name;

		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TASK1_C|Name Input</title>
</head>
<body>
<form method="post" action="#">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="myname" value="<?php echo $name; ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>