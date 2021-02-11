<?php
  if (empty($_POST["t1"])) 
  {
    echo"Name is required";
  }
  if (empty($_POST["t2"])) 
  {
    echo"Password is required";
  } else {
	  $name =$_POST["t1"];
		$pass =$_POST["t2"];
		if (!preg_match("/^[a-zA-Z0-9]*$/",$name)) 
		{
			echo"Only letters and numbers allowed in username";
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/",$pass)) 
		{
			echo"Only letters and numbers allowed in password";
		}
		else	
			echo"<br>Validation Successful";
  }

?>