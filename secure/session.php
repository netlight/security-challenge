<?php
	include('db/config.php');
	session_start();

	if (isset($_SESSION['current_user'])){
		$current_user = $_SESSION['current_user'];
	} else {
		header("location: index.php");
	}
?>