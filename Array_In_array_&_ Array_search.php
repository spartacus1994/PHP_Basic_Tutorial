<?php

// in_array function:
// Index Array Example:
$Vechical= array("car","Bus","truck","Bike");

echo in_array("Bus",$Vechical)."<br>";

if(in_array("Bus",$Vechical)){
	echo "Search Find"."<br>";
}else{
	echo "error";
}



// Associative Array Example:
$glossories=array("name"=> "rice","price"=>30,"category"=>"Basmati");
	//array("name"=> "rice","price"=> 10,"category"=>"Mansuli")
	
			
$array=
["name"=> "rice","price"=> 30,"category"=>"Basmati",
"name"=> "rice","price"=> "20","category"=>"mansuli"];
/*["name"=> "rice","price"=> "20","category"=>"mansuli"],
["name"=> "rice","price"=> "10","category"=>"half boil"]*/



if (in_array(30, $array)) {
	echo "Search Find";
}else{
	echo "Search Not Find";
}
//end of in_array function

//array search function
echo array_search(30, $glossories);

echo "<pre>";
print_r($glossories);

