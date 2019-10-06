<?php
	$server		 = 'localhost';
	$user		 = 'root';
	$password	 = 'root';
	$db			 = 'networth';

	$conn		 = mysqli_connect($server, $user, $password, $db);

	if(!$conn){
		die("connection to this database failed: " .mysqli_connect_error());
	}

	//echo "we connected successfully";
// This is Tobbhie's Personal Database Config to the Net worth Heroku App
 //$url=parse_url(getenv("CLEARDB_DATABASE_URL"));
  //$server = $url["host"];
  //$username = $url["user"];
  //$password = $url["pass"];
  //$db = substr($url["path"],1);

 
//$conn = mysqli_connect($server, $username, $password, $db);

//if(!$conn){
		//die("connection to this database failed: " .mysqli_connect_error());
	//}

	//echo "we connected successfully";

?>