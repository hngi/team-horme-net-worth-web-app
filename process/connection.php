
<?php
	$server		 = 'dumbo.db.elephantsql.com (dumbo-01)';
	$user		 = 'wfhmuqso';
	$password	 = 'sLorwsG5twKIkDkH3hu8qpYzD2iP18c8';
	$database	 = 'wfhmuqso';

	$conn		 = mysqli_connect($server, $user, $password, $database);

	if(!$conn){
		die("connection to this database failed: " .mysqli_connect_error());
	}

	//echo "we connected successfully";
?>