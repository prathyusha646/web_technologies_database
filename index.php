<?php
	$conn=mysqli_connect('localhost','system','','userdatabase');
	/*if (!$conn) {
		echo"Sorry. Database is not connected.!";
	} else {
		echo"Hurray. Database is connected.";
	}*/
	$query="SELECT * FROM `user_details`";
	$result=mysqli_query($conn,$query);
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";echo "<br>";
	echo "<table border ='3' align='center' width='18%'>";
	echo "<tr>";
	echo "<th> User Name </th>";
	echo "<th> Password </th>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$row['User Name']."</td>";
		echo "<td>".$row['Password']."</td>";
		echo "<tr>";
	}
	echo "</table>";
?>