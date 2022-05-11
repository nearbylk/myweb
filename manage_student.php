<?php
if(isset($_POST["txtSID"]))
{
	//Accept HTML form Data
	$sid = $_POST["txtSID"];
	$name = $_POST["txtName"];
	$age = $_POST["txtAge"];
	$address = $_POST["txtAddress"];

	//Connect with MySQL Server
	$con = mysqli_connect("localhost:3308","dneuser","123");
	//Select the DB
	mysqli_select_db($con,"studentdb");
	//Perform SQL
	$sql = "INSERT INTO tblstudent(sid,name,age,address) VALUES('$sid','$name',$age,'$address')";
	$ret = mysqli_query($con,$sql);
	echo "No of records inserted: $ret";
	//Disconnect from Server
	mysqli_close($con);
}
?>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
	<form name="frmStudent" method="post" action="#">
		St Id: <input type="text" name="txtSID"><br>
		Name: <input type="text" name="txtName"><br>
		Age: <input type="text" name="txtAge"><br>
		Address:<textarea name="txtAddress"></textarea><br>
		<input type="submit" name="btnSave" value="Save">
		<input type="reset" name="btnReset" value="Reset">
	</form> 
</body>
</html>

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