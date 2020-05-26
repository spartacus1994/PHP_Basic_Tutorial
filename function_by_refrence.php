<?php
function testing(&$string)
{
 $string .="Hey";
//var_dump($string);
}

$str="hello";

testing($str); 
echo $str;


function testing2(&$parameter){
	$parameter += 2;

}

$variable=10;
testing2($variable);
echo $variable;

?>