<?php
$kanguru1 = "";
$kanguru2 = "";
function kanguru($x1,$v1,$x2,$v2){
	for ($i=0; $i < 4; $i++) {

	$x1 += $v1;
	$x2 += $v2;
	@$kanguru1 .= $x1." ";
	@$kanguru2 .= $x2." ";

	}
	echo "kanguru1 = ".$kanguru2;
	echo "<br>";
	echo "kanguru2 = ".$kanguru2;
	echo "<br>";
	if ($x1 == $x2) echo "Yes";
	else echo "No";
}
 echo "kanguru(0,3,4,2)";
 echo "<br>";
 kanguru(0,3,4,2);
 echo "<br>";
 kanguru(1,2,5,1);
 echo "<br>";
kanguru(1,3,7,1);
 echo "<br>";
kanguru(1,3,7,1);
?>