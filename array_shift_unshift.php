<?php

$array=array("shubham","parajuli","Biratnagar");

// It will delete first field data //
array_shift($array);

// It will add  data in first field //
array_unshift($array, "hari");


echo "<pre>";
print_r($array);