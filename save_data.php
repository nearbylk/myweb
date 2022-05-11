<?php
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
?>