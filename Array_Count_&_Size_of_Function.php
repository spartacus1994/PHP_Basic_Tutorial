<?php 

$fruit= ["orange","apple","apple","mango","Banana"];
// echo count($fruit);

$vegitable = array("cauliflower",'peas','brinjal');
// echo sizeof($vegitable);


$food=[

	'vegitable'=>["cauliflower","peas","brinjal"],
	'fruits'=>["orange","apple","mango","Banana"]

	];

//echo "<pre>";
//print_r($food);
echo count($food,1)."<br>";


// To count internal array value //
echo sizeof($food["vegitable"]);


// Array Count //
echo "<pre>";
print_r(array_count_values($fruit));