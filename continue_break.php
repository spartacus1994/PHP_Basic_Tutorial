<?php

/*CONTINUE STATEMENT*/
for ($i=1; $i <=10 ; $i++) { 
	if($i == 3){
		echo "no" .$i."<br>";
		continue;
	}

	echo "The no is".$i. "<br>";
}

echo "<br><br>";
/*BREAK STATEMENT*/
for ($i=1; $i <=10 ; $i++) { 
	if($i == 3){
		echo "no" .$i."<br>";
		break;
	}

	echo "The no is".$i. "<br>";
}