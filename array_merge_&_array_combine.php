<?php

//array_merge:It will add two array where Ram will be replaced by sita due to their common key //
//start//
$male=[
		'a'=>"Ram",'b'=>"shyam",'c'=>"Hari"
	  ];

$female=[
		'a'=>"Sita",'e'=>"Gita",'f'=>"Rita",'g'=>"monika"
		];

//It will add Two array but sita will not be replaced by ram//
//$var =$male+$female;

$var=array_merge($male,$female);
echo "<pre>";
print_r($var)."<br>";


//end//



//array_merge_recursive:It will add Two array but not get replaced key value//
$males=[
		'a'=>"Ram",'b'=>"shyam",'c'=>"Hari"
	  ];

$females=[
		'a'=>"Sita",'e'=>"Gita",'f'=>"Rita",'g'=>"monika"
		];
$array_merge_recursive=array_merge_recursive($males,$females);

echo "<pre>";
print_r($array_merge_recursive)."<br>";



// It will combine only Two array and make one array as a key.
$array_combine = array("name","cast","Roll");

$array_combine_1 = ['shubham','parajuli',20];

$combine=array_combine($array_combine, $array_combine_1);

echo "<pre>";
print_r($combine);


