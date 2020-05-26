
<?php

$array=[
"krishna"=>[
	"Physic"=>50,
	"chemistry"=>60,
	"Biology"=>70,
],

"salman"=>[
	"Physic"=>68,
	"chemistry"=>79,
	"Biology"=>73,
],
"mohan"=>[
	"Physic"=>62,
	"chemistry"=>92,
	"Biology"=>97
]
];


echo "<table border ='2px'>
<th>Student</th>
<th>Physic</th>
<th>chemistry</th>
<th>Biology</th>";

foreach ($array as $key => $value) {
	echo "<tr><td>".$key."</td>";
	foreach ($value as $key2 => $obj) {
	echo "<td>".$key2.":".$obj."</td>";
	}
	echo "</tr>";
}
echo "</table>";