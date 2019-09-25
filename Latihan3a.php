<!DOCTYPE html>
<html>
<head>
	<title>Latihan3a</title>
</head>
<style>
	.ganti_style {
		font-size: 28px;
		color : #1A0547;
		font-style: italic;
		font-family: arial;
		border-top: #999 1px solid;
		width: 320px;
		padding-top: 10px;
	}
</style>
<body>

	<div class="ganti_style">
		

	<?php 
		$tulisan = "Hello World! Here I come";
		$kelas = "ganti_style";

		function ganti_style($tulisan,$kelas) {
			echo "$kelas";
		}

		echo ganti_style($kelas,$tulisan);

	 ?>

	</div>


</body>
</html>