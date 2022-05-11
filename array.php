<?php
//Store array data
$numbers = array(5,2,7,9,3);

//Print array data
echo $numbers[0]."<br>";
echo $numbers[1]."<br>";
echo $numbers[2]."<br>";
echo $numbers[3]."<br>";
echo $numbers[4]."<br>";

for($i=0;$i<5;$i++)
{
	echo $numbers[$i].",";
}

echo "<br><br>";

//Print aray data in reverse order
for($i=4;$i>=0;$i--)
{
	echo $numbers[$i].",";
}

//Calculate sum
echo "<br><br>";
echo "Sum of array data: ".array_sum($numbers);

//Max
echo "<br><br>";
echo "Max of array data: ".max($numbers);

?>