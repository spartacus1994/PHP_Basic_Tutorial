<?php


//Index Array
$fruits = ["apple","Banana","mango",1=>"lichi","orange"];
$vegitable =["Cauliflower","peas","carrot"];

// It will replace fruits by vegitable data//
//array_replace
$var=array_replace($fruits, $vegitable);

echo "<pre>";
print_r($var);


//Multidimenstion associative array //
$array =array(
			array("a"=>array("ram"),"b"=>array("shyam","Hari","mohan")),
		    array('c'=>array("Rita"),'d'=>array("gita"))
			 );
			

$array2 =array(
	array("a"=>array("shubham"),"b"=>array("krishna","Gopal")),
	array('d'=>array("Sita"))
				);

//array_replace_recursive
$var = array_replace_recursive($array, $array2);
echo "<pre>";
print_r($var);
exit();
