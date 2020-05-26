<?php

//step: 1

function variable_func($parameter)
{
	echo $parameter;

}

$var= "variable_func";
$var("message");


//step 2 is called as anonymous 

$variable = function ($parameter)
{
echo $parameter;
};
$variable("hello");