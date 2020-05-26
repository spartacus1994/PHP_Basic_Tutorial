<?php

$array=[
"first key"=>'Red',
"second key"=>'Blue',
"third key"=>'Green',
"fourth key"=>'yellow'
];


// 1) It will convert Keys to Index;
$array_key=array_keys($array);
echo "<pre>";
print_r($array_key)."<br>";
echo "</pre>";


// 2)

$array_exits=array_key_exists("fourthkey",$array);
echo "<pre>";
print_r($array_exits)."<br>";
echo "</pre>";

if($array_exits == 1){

	echo "Array Keys Exits";
}else{

	echo "Array Key Doesn't Exit";
}