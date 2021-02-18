<?php
	if(isset($_POST['submit'])){

		$ename = $_POST['myEmail'];

		if($ename == ""){
			echo "null submission...";
		}else{
			echo "Email:".$ename;


		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TASK_B|Email Input</title>
</head>
<body>
 <form method="post" action="#">
        <fieldset>
            <legend>Email</legend>
            <input type="text" name="myEmail" value=""> <br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>