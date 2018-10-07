<?php
	session_start();
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
		// last request was more than 1 minute ago
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();   // destroy session data in storage
		header("Location: index.php");
		die();
	}
else{
	$_SESSION['LAST_ACTIVITY'] = time();	
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>