
<?php
	$server		 = 'salt.db.elephantsql.com (salt-01)';
	$user		 = 'kglcuwyc';
	$password	 = 'JjkyrTvl_vUwDAAgrNlhAPLH8XDgm2M-';
	$database	 = 'kglcuwyc';

	$conn		 = mysqli_connect($server, $user, $password, $database);

	if(!$conn){
		die("connection to this database failed: " .mysqli_connect_error());
	}

	//echo "we connected successfully";
?>