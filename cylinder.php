<?php
//Store Radius and Height
$r = 6;
$h = 10;

function calVolume($r,$h)
{
	$vol = 3.14 * $r * $r * $h;
	echo "Volume is $vol <br>";
}

function calArea($r,$h)
{
	$area = (2 * 3.14 * $r * $r) + (2 * 3.14 * $r * $h);
	return $area;
}

calVolume($r,$h);
$a = calArea($r,$h);
echo "Surface area is $a <br>";
?>