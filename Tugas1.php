<?php 
$x = "Pengulangan untuk mencari kategori bilangan :<br><br>";
echo $x;

for ($i=1; $i <= 19; $i++) {
	$a = 0;
	for ($j=1; $j <= $i ; $j++) { 
		if ($i % $j == 0) {
			$a++;
		}
	}if ($a == 2 && $i % 2 == 1 ) {
		echo "<li>angka " . $i . " adalah bilangan ganjil sekaligus bilangan prima</li>";
	}else if ($a == 2 && $i % 2 == 0 ) {
		echo "<li>angka " . $i . " adalah bilangan genap sekaligus bilangan prima</li>";
	}else if ($i % 2 == 0 ) {
		echo "<li>angka ". $i . " adalah bilangan genap</li>";
	}else {
		echo "<li>angka ". $i . " adalah bilangan ganjil</li>";
	}
}

 ?>