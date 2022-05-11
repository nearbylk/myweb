<?php
//Store numbers
$sno = "S001";
$name = "Kamal Perera";
$sm = 86;
$mm = 90;
$em = 78;

//Calculations
$avg = 0.00;
$grade = "";
$color = "";

$avg = ($sm + $mm + $em) / 3;
if($avg<40)
{
	$grade = "F";
	$color = "Red";
}
else if($avg<60)
{
	$grade = "S";
	$color = "Brown";

}
else if($avg<80)
{
	$grade = "C";
	$color = "Yellow";
}
else if($avg<=100)
{
	$grade = "D";
	$color = "Green";
}

//Display
echo "Student No: $sno	<br>";
echo "Average: $avg <br>";
echo "Grade is $grade";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="<?php echo $color; ?>">

</body>
</html>