<?php

//variable Inside Function is local
function local_var()
{
	$a=10;
	$b=20;

	echo $a =$a+$b;
}

local_var();
 echo "<br>";


//variable Outside is Global

$a=10;
$b=20;
function global_var()
{
global $a,$b ,$output;
$output=$a+$b;
}

global_var();
echo $output;
