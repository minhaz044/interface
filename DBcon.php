<?php

	$host='localhost';
    $user = 'root';
	$pass = '';
	$db = "hndgesture";//just place it with your database name
	//$con = new mysqli($host, $user, $pass, $db) or die("Unable to connect");
	$con=mysqli_connect($host, $user, $pass, $db) or die("Unable to connect");


?>
