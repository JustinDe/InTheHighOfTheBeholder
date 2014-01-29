<?php
	header("Location: D1S01/day1.php");
	session_start();
	$username = $_POST['username'];
	$_SESSION['username'] = $username
	
?>