<?php

include('config.php')

extract($_POST);
$query = "INSERT INTO  contact-data ('firstname','conact_number','email') VALUES(".$firstname.",".$conact_number.",".$email.")";
$result = $mysqli->query($query);
if($result){
	echo "Something went wrong".$mysqli->err;
}

	echo "Thanks for Submitting";
	$mysqli->close();
	
	

?>