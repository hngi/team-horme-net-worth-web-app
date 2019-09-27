<?php

// WE CHECK TO SEE IF COOKEIE WAS SET or did the browser send a cookie for the session
if( isset($_COOKIE[session_name()]) ) {
	
	// empty the cookie
	
	setcookie( session_name(), '', time()-86400, '/' );
	
}

//You must start a session before you can destroy it

session_start();

//WE NEED TO CLEAR ALL SESSION VARIABLES 

session_unset();

// DESTROY THE SESSION

session_destroy();

echo "You have been logged out! see you next time";

// TO CHECK IF THE SESSION WAS DESTROYED USE PRINT_R

//print_r($_SESSION);

header("Location: index.php")

?>