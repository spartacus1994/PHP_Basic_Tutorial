<?php 

//Array
$x=array('shubham','parajuli','Biratnagar');
//echo $x[0],$x[1],$x[2]; 

//print_r($x).'<br>';
//var_dump($x);

$localhost ="127.0.0.1";
//$table=	array('1', '2','3','4','5','6','7','8','9','10');


$multipyler = $_POST['table'];
$table = 0;

//$table++;
//constraint varriable
define('localhost', $localhost,True);
define('username','root');
define('password',Null);
define('database_name', 'shubham');
echo localhost.'<br>'.username.'<br>'.password.'<br>'.database_name.'<br>';

/*foreach ($table as $value) {
	echo $value * $multipyler."<br>";
}*/


while($table < 10) {
	$table ++;
	$output = $table * $multipyler;
	echo $multipyler ."*". $table ."=". $output ."<br>";		

}
?>