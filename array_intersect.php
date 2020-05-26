<?php 

$color1=['a'=>'red','h'=>'green','c'=>"blue",'d'=>'yellow'];

$color2=['a'=>'red','h'=>'pink','f'=>'rose','g'=>'blue'];

$color3=['a'=>'red','h'=>'green','i'=>'white','j'=>'black'];


// It will intersect common value in array
$var= array_intersect($color1, $color2, $color3);
echo "<pre>";
print_r($var);
'</pre>';

// It will give color1 & color2 common key
$var1= array_intersect_key($color1, $color2,$color3);
echo "<pre>";
print_r($var1);
'</pre>';


// It will give color1 & color3 common key &  value //
$var2= array_intersect_assoc($color1,$color2, $color3);
echo "<pre>";
print_r($var2);
'</pre>';
