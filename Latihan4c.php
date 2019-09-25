 <?php 

$ibukota = [
				"Indonesia" => "D.K.I. Jakarta",
				"Singapura" => "Singapura",
				"Malaysia" => "Kuala Lumpur",
				"Brunei" => "Bandar Seri Begawan",
				"Thailand" => "Bangkok",
				"Laos" => "Vientiane",
				"Filipina" => "Manila",
 				"Myanmar" => "Naypyidaw"
 			];


  ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 4c</title>
 </head>
 <body>
 		<?php echo "Daftar Negara ASEAN dan Ibukota :"; ?>
 		<?php foreach ($ibukota as $negara => $kota): ?>
 				<li><?php echo "$negara : $kota</li>" ?></li>
 		<?php endforeach ?>
 
 </body>
 </html>