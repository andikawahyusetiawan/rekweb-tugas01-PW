 <?php 

$ibukota = [
	[
		"negara" => "indonesia",
		"Ibu kota" => "D.K.I.Jakarta",
		"Kode Telepon" => "+62"
	],

	[
		"negara" => "Singapura",
		"Ibu kota" => "Singapura",
		"Kode Telepon" => "+65"
	],

	[
		"negara" => "Malaysia",
		"Ibu kota" => "Kuala Lumpur",
		"Kode Telepon" => "+60"
	],

	[
		"negara" => "Brunei",
		"Ibu kota" => "Bandar Seri Begawan",
		"Kode Telepon" => "+673"
	],

	[
		"negara" => "Thailand",
		"Ibu kota" => "Bangkok",
		"Kode Telepon" => "+66"
	],

	[
		"negara" => "Laos",
		"Ibu kota" => "Vientiane",
		"Kode Telepon" => "+856"
	],

	[
		"negara" => "Filifina",
		"Ibu kota" => "Manila",
		"Kode Telepon" => "+63"
	],

	[
		"negara" => "Myanmar",
		"Ibu kota" => "Naypyidaw",
		"Kode Telepon" => "+95"
	],

]
 			


  ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 4d</title>
 </head>
 <body>
 		<table border=1 align=left>
 			
 			<tr>
 				<th>Negara</th>
 				<th>Ibu kota</th>
 				<th>Kode Telepon</th>
 			</tr>

 			<?php foreach ($ibukota as $negara) : ?>

 			<tr>
 				<td><?php echo $negara["negara"]; ?></td>
 				<td><?php echo $negara["Ibu kota"]; ?></td>
 				<td><?php echo $negara["Kode Telepon"]; ?></td>
 			</tr>
 		<?php endforeach; ?>

 		</table>
 
 </body>
 </html>