<?php 
$list = array(
	array(
		'id' =>1 ,
		'Name'=>"Ram",
		'Degination'=>"Teacher",
		'salary'=>10000 
	),
	array(
		'id' =>2 ,
		'Name'=>"shyam",
		'Degination'=>"Accountant",
		'salary'=>12000 
	),
	array(
		'id' =>3 ,
		'Name'=>"Hari",
		'Degination'=>"Driver",
		'salary'=>5000 
	)

);

$list2 = array(
	array(
		1 ,
		"shubham",
		"Teacher",
		10000 
	),
	array(
		2 ,
		"Bhawana",
		"Accountant",
		12000 
	),
	array(
		3 ,
		"Hari",
		"Driver",
		5000 
	)

);

echo "<table border='2px;'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Degination</th>
<th>Salary</th>
</tr>
";



foreach ($list as list(id=>$id,Name=>$Name,Degination=>$Degination,salary=>$salary)) 
	
{
  
	echo "<tr><td>".$id."</td>"."<td>".$Name."</td><td>".$Degination."</td><td>".$salary."</td></tr>"; 
}

echo "</table>";


echo "<table border='2px;'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Degination</th>
<th>Salary</th>
</tr>
";

foreach ($list2 as list($id,$Name,$Degination,$salary)) 	
{
  
	echo "<tr><td>".$id."</td>"."<td>".$Name."</td><td>".$Degination."</td><td>".$salary."</td></tr>"; 
}

echo "</table>";