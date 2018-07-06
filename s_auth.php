<?php
	session_start();
	if(!isset($_SESSION['susername'])){
		header('Location: index.php');
		exit();
	}
?>
