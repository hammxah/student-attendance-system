<?php

	$con = mysqli_connect("localhost","root","");
	if(!$con)
		echo "Connection failed";

	mysqli_select_db($con, "sms");


?>