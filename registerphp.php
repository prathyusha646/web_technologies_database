<?php
	$con=mysqli_connect('localhost','root','','register');
	if (!$con) {
		echo"Sorry. Database is not connected.!";
	} else {
		echo"Hurray. Database is connected.";
	}
	$username =mysqli_real_escape_string($con,$_REQUEST['t1']);
	$password = mysqli_real_escape_string($con,$_REQUEST['t2']);
	$gender =mysqli_real_escape_string($con,$_REQUEST['r1']);
	$phone =mysqli_real_escape_string($con,$_REQUEST['t3']);
	$email =mysqli_real_escape_string($con,$_REQUEST['t4']);

	$sql = "INSERT INTO validate(username,password,gender,phone,email) VALUES ('$username', '$password','$gender','$phone','$email')";

	if(mysqli_query($link, $sql))
	{
	echo "Registeration Successful";
	} 
	else
	{	
	echo "Registeration Unsuccessful ";
	}
?>