<?php
		session_start();
		unset($_SESSION['row']);
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();   // destroy session data in storage
		echo $_SESSION['LAST_ACTIVITY'];
		header("Location: index.php");
		die();
?>