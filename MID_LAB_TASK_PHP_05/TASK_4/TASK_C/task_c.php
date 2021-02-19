<html>
<head>
	<title>Gender Input</title>
</head>
<body>


<form  method="get" action="#">
	<fieldset>
		<legend>GENDER</legend>
Gender: 
Male<input type="radio" value="<?php echo "Male"; ?>" name="gender">
Female<input type="radio" value="<?php echo "Female"; ?>" name="gender">
Other<input type="radio" value="<?php echo "Other"; ?>" name="gender">
<br>
<input type="submit">
</fieldset>
</form>
<br>
Your Gender is <?php 
if(isset($_GET['gender'])) echo $_GET["gender"] ?>

</body>
</html>