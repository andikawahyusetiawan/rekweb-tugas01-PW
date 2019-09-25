<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
	
	<tr>
		<th>kolom 1</th>
		<th>kolom 2</th>
		<th>kolom 3</th>
		<th>kolom 4</th>
		<th>kolom 5</th>
	</tr>

	<?php for ($i=1; $i <=15 ; $i++) { ?>

	<tr>
		
		<?php for ($j=1; $j <=5 ; $j++) { ?>
			<td><?php echo "baris$i,kolom$j"; ?></td>
		<?php } ?>

	</tr>

	<?php } ?>
	
	</table>

</body>
</html>