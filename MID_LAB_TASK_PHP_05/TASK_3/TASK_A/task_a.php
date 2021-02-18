<?php

	

	if(isset($_POST['submit'])){

		$date 		= $_POST['day'];
        $month 		= $_POST['month'];
        $year 		= $_POST['year'];

		if($date == "" || $month == ""  || $year == "" ){
			echo "null submission...";
		}else{
			echo "Date:".$date;
            echo "Month:".$month;
            echo "Year:".$year;
		}

	}else{
		echo "invalid request...";
	}
?> 