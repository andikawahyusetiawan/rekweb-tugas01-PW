<!DOCTYPE html>
<html>
<head>
	<title>modul 2 - latihan 1</title>
	<style>
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

		.ganjil {
			background-color: #003;
			color: #fff;
		}

		.genap {
			background-color: #999;
		}
	</style>
</head>
<body>

<?php 
	for ($i=1; $i <=5 ; $i++) { ?>
	<div class="clear">
		<?php 
			for ($j=1; $j <=$i ; $j++) { ?>
			<?php if ($i % 2 == 0): ?>
				<div class="kotak genap">
					<?php echo $j; ?>
				</div>

			<?php else : ?>

				<div class="kotak ganjil">
					<?php echo $j; ?>
				</div>
				
			<?php endif ?>
		<?php } ?>
<?php } ?>

</body>
</html>