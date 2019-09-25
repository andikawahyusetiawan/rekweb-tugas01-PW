<!DOCTYPE html>
<html>
<head>
	<title>modul 2 - latihan 1</title>
	<style type="text/css">
		.kotak {
		border:1px solid black;
		width: 50px;
		height: 50px;
		margin: 5px;
		float: left;
		text-align: center;
		line-height: 45px;
		}

		.clear {
			clear: both;

		}
	</style>
</head>
<body>

<?php 
	for ($i=1; $i <=5 ; $i++) { ?>
	<div class="clear">
		<?php 
			for ($j=1; $j <=$i ; $j++) { ?>
			<div class="kotak"><?= "$j" ?></div>
		<?php } ?>
	</div>
<?php } ?>
</body>
</html>