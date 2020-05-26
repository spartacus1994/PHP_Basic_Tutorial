<?php

$w=25;
$x=25;
$y=25;
$z=25;

function Add($a,$b,$c,$d)

{

	$sum = $a+$b+$c+$d;
	return $sum;
}

function percenatge($e)
{
	$per = $e/4;
	return $per;
	
 }


$var= Add($w,$x,$y,$z);

echo $finalOutput=percenatge($var);