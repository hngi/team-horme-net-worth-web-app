<?php
$fullname = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$msg = $_POST['message'];
$mailcontent="From: $fullname \n Email: $email \n Title: $title \n Message: $msg";
$f = fopen('message.txt', "a");
fwrite($f, $mailcontent) or die("Error!");
fclose($f);
echo "Thank You $fullname , expect to hear from us soon!"
?>