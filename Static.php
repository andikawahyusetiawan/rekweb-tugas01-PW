<?php 
function varstatic() {
	static $x = 1;
	echo $x;
	$x++;
	echo "</br>";
}

varstatic();
varstatic();
varstatic();

 ?>