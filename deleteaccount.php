<?php 
	include('dindex.php');
	include('database.php');

	if(loggedin()) {
		deleteaccount($_SESSION['username']);
	}
	header("location:login.php");
 ?>