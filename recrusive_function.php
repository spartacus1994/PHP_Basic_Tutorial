<?php

function recrusive ($para)
{
if($para <= 5){
	echo $para;
	recrusive($para+1);
}

}

recrusive(0);


echo "<br>";

//factorial

function recursive_2($n)
{
if($n == 0) {
	return exit();
}else{
	return ($n *  recursive_2($n-1));
}

}


echo recursive_2(0);

echo "<br>";

//variable function
$a = function ($para)
{
return $para;
};

 echo $a("This will be dispay as an output:");

function var_function($para)
{
	echo $para;
}

$abc =("var_function");
$abc("abc");