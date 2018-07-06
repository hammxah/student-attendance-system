<?php
	session_start();
	if(!isset($_SESSION["tusername"])){
		header("Location: index.php");
		exit();
	}
?>
