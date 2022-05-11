<?php
//Accept form data
$id = $_GET["txtSID"];
$sm = $_GET["txtSM"];
$mm = $_GET["txtMM"];
$em = $_GET["txtEM"];

//Calculations
$avg = 0.00;
$grade = "";

$avg = ($sm + $mm + $em) / 3;
if($avg<40)
{
	$grade = "F";
}
else if($avg<60)
{
	$grade = "S";

}
else if($avg<80)
{
	$grade = "C";
}
else if($avg<=100)
{
	$grade = "D";
}

//Display
echo "Student No: $id	<br>";
echo "Average: $avg <br>";
echo "Grade is $grade";


?>