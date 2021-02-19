<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Degree Input</title>
</head>
<body>
<form  method="get" action="#">
	<fieldset>
		<legend>DEGREE</legend>
Degree: 
SSC<input type="checkbox" value="SSC" name="degree">
HSC<input type="checkbox" value="HSC" name="degree">
BSc<input type="checkbox" value="BSc" name="degree">
MSc<input type="checkbox" value="MSc" name="degree">
<br>
<input type="submit">
</fieldset>
</form>
<br>
Your Degree is <?php 
if(isset($_GET['degree'])) echo $_GET["degree"] ?>
</body>
</html>