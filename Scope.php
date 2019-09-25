<?php 
$GLOBALS['varGLOBAL'] = 10;

function testvar(){
	$varlokal = 1;
	echo "<p> ini variabel lokal</p>";

	echo "variabel global : ".$GLOBALS['varGLOBAL'];
	echo "<br>";
	echo "variabel lokal : $varlokal";
	echo "<br>";
}

testvar();

echo "<p>test variabel di dalam function.</p>";
echo "variabel global : $varGLOBAL";
echo "</br>";

echo "variabel lokal : $varlokal";
echo "</br>";
 


 ?>
