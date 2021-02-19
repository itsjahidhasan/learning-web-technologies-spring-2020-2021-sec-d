<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blood Group Input</title>
</head>
<body>
<form action="#" method="get">
	<fieldset>
		<legend>BLOOD GROUP</legend>
Blood Group: 
<select name="blood">
<option value=""> --Select-- </option>
<option value="A+"> A+ </option>
<option value="A-"> A- </option>
<option value="B+"> B+ </option>
<option value="B-"> B- </option>
<option value="O+"> O+ </option>
<option value="O-"> O- </option>
<option value="AB+"> AB+ </option>
<option value="AB-"> AB- </option>


</select>
<br>
<input type="submit">
</fieldset>
</form>
<br>
Your Blood Group is <?php 
if(isset($_GET['blood'])) echo $_GET["blood"] ?>
</body>
</html>