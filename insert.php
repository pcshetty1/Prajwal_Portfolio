<?php

	$con = mysqli_connect('localhost','root','');
	
	if(!$con)
	{
		echo 'Not Connected to Server';
	}
	
	if(!mysqli_select_db($con,'contact'))
	{
		echo 'Data Not Selected';
	}
	
	$Name =$_POST[name];
	$Number =$_POST[number];
	$Email =$_POST[email];

	$sql = "INSERT INTO `contact`(`Name`, `Contact No`, `Email`) VALUES ('$Name','$Number','$Email')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Contact Not Received';
	}
	else
	{
		echo'Contact Received';
	}
	
	header("refresh:0; url=contact.html");

?>