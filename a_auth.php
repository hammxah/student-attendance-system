<?php
	session_start();
	if(!isset($_SESSION["ausername"])){
		header("Location: index.php");
		exit();
	}
?>
