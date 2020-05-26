<?php


// 1st way
$sports = array("cricket","football","Table Tennis","vollyball");
echo $sports[0],$sports[1],$sports[2],$sports[3]; 

// 2nd way
echo "<br>";
$fruits = ["Apple","Oange","Banana","mango"];
echo $fruits[0],$fruits[1],$fruits[2],$fruits[3];

// 3rd way
echo "<br>";
$mobile[0]= "samsung";
$mobile[1]= "Nokia";
$mobile[2]= "Apple";
$mobile[3]= "LG";


echo "<pre>";
print_r($mobile);


//for loop
echo "<br>";

echo "<ul>";
for ($i=0; $i<4; $i++)
{
	echo "<li>".$mobile[$i]."</li>";
}
echo "</ul>";