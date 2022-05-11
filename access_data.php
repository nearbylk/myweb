<?php
//Connect with MySQL Server
$con = mysqli_connect("localhost:3308","dneuser","123");
//Select the DB
mysqli_select_db($con,"studentdb");
//Perform SQL
$sql = "SELECT * FROM tblstudent";
$result = mysqli_query($con,$sql);
//Display Data
while($row = mysqli_fetch_array($result))
{
	echo "St Id: $row[0] <br>";
	echo "Name: $row[1] <br>";
	echo "Age: $row[2] <br>";
	echo "Address: $row[3] <br>";
}
//Disconnect from Server
mysqli_close($con);
?>