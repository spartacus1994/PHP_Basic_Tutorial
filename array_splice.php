<?php
$color=["red","green","blue","yellow"];

$morecolor=["pink","black","white"];

//array_splice($color,start,length);

//array_splice($color,2,2);

//array_splice($color,-3,2);

//for combining two array.
array_splice($color,1,3,$morecolor);
echo "<pre>";
print_r($color);