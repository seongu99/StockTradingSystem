<?php

	require_once('init.php');

	$sql = "SELECT FirstName,LastName FROM person WHERE type='employee'";
	$execute = mysql_query($sql) or die(mysql_error()); 
	
	$total_record = mysql_num_rows($execute);
	for ($i = 0; $i < $total_record; $i++) {

 		mysql_data_seek($execute, $i);
        $row = mysql_fetch_array($execute);

        echo $row["FirstName"];
        echo " ";
		echo $row["LastName"];
		echo "<br />";


	}
	//echo $listofemployee["FirstName"],["LastName"];

	//echo $listofemployee[1];
?>