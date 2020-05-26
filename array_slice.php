<?php

//array using Index Array/
$vechiles = ["car","Bike","Aeroplane","ship"];
// arrays using Associative array
$vechiles_1 = ["car"=>'ferrari',"Bike"=>"yahama","Aeroplane"=>"Quatar","ship"=>"cruiz"];

// If we place true it will show true key value & if we set false or empty it will show ascending number.//
$array_slice=array_slice($vechiles, 3,2);

echo "<pre>";
print_r($array_slice);
