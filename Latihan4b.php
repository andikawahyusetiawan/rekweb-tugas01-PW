 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 4b</title>
 </head>
 <body>
 		<?php 
			$negara = array("Indonesia","Singapura","Malaysia","Brunei","Thailand");

 			echo "Daftar Negara ASEAN awal:";
 			foreach ($negara as $nama) {
 			echo "<li>$nama</li>";
 			}

 		echo "</br></br>";

 		echo "Daftar Negara ASEAN baru :";
 		$baru = array_push($negara,"Laos","Filipina","Myanmar");
 		foreach ($negara as $nama) {
 			echo "<li>$nama</li>";
 		}

 		 ?>
 
 </body>
 </html>