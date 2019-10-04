
<?php
	$host    	 = 'localhost';
	$user		 = 'root';
	$password	 = 'root';
	$db			 = 'networth';

	$conn		 = mysqli_connect($host, $user, $password, $db);

	if(!$conn){
		die("connection to this database failed: " .mysqli_connect_error());
	}

	//echo "we connected successfully";
?>