<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gender Input</title>
</head>
<body>
	
<form  method="get" action="#">
	<fieldset>
		<legend>GENDER</legend>
Gender: 
Male<input type="radio" value="Male" name="gender">
Female<input type="radio" value="Female" name="gender">
Other<input type="radio" value="Other" name="gender">
<br>
<input type="submit">
</fieldset>
</form>
<br>
Your Gender is <?php 
if(isset($_GET['gender'])) echo $_GET["gender"] ?>

</body>
</html>