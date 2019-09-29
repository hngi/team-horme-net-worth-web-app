
<?php
	$server		 = 'localhost';
	$user		 = 'natocwgt_teamhorme';
	$password	 = '**&&%&*9&*65uej65G%%';
	$db			 = 'natocwgt_networth';

	$conn		 = mysqli_connect($server, $user, $password, $db);

	if(!$conn){
		die("connection to this database failed: " .mysqli_connect_error());
	}

	//echo "we connected successfully";
?>