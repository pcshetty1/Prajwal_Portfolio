<?php

	$con = mysqli_connect('localhost','root','');
	
	if(!$con)
	{
		echo 'Not connected to server';
	}
	
	if(!mysqli_select_db($con,'room'))
	{
		echo 'Data Not Selected';
	}
	
	$Name =$_POST[name];
	$Email =$_POST[email];
	$Room =$_POST[rooms];
	$Checkin =$_POST[checkin];
	$Checkout =$_POST[checkout];
	
	$sql = "INSERT INTO `room`(`Name`, `Email`, `Choose a Room`, `Check In`, `Check Out`) VALUES ('$Name','$Email','$Room','$Checkin','$Checkout')";
	
	if(!mysqli_query($con,$sql))
	{
		echo'Not Inserted';
	}
	else
	{
		echo'Inserted';
	}
	
	header("refresh:0; url=room.html");

?>