<?php

$multidimensional=[
["shubham","parajuli","Biratnagar","9849297700"],
["Ram","shah","kathmandu","0123456789"],
["shyam","shah","lalitpur","9876543210"]

];

/*echo $multidimensional[0][0];
echo $multidimensional[0][1];
echo $multidimensional[0][2];
echo "<br>";
echo $multidimensional[1][0];
echo $multidimensional[1][1];
echo $multidimensional[1][2];

echo "<br>";
echo $multidimensional[2][0];
echo $multidimensional[2][1];
echo $multidimensional[2][2];*/


for($row=0; $row<4; $row++) { 

for($col=0; $col<4; $col++) { 
echo $multidimensional[$row][$col]. " ";
}
	echo "<br>";
}

echo "<table border ='2px';>
 <tr>
<th>Name</th>
<th>Cast</th>
<th>Address</th>
<th>Phone No</th>
</tr>";


foreach ($multidimensional as $value) {
	echo "<tr>";
	foreach ($value as $key) {
		echo "<td>".$key."</td>";
	}
	echo "</tr>";

}


echo "</table>";
