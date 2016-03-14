<?php 
session_start();

	session_destroy();
	header("location:/tfm/login.php");

?>