<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","contactform");

$mysqli = new mysql(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$servername = "localhost";
$username = "username";
$password = "password";

$conn = new mysqli(localhost, contact , password);

if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}	
echo "Connected successfully";

?>