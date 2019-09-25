<!DOCTYPE html>
<html>
<head>
	<title>latihan</title>
</head>
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
<body>
	<?php 
		$a = "A";
		$b = "B";
		$c = "C";
	 ?>

<div class="kotak"><?php echo "$a";  ?></div>
<div class="clear"></div>
<div class="kotak">	<?php echo "$a";  ?></div>
<div class="kotak">	<?php echo "$b";  ?></div>
<div class="clear"></div>
<div class="kotak">	<?php echo "$a";  ?></div>
<div class="kotak"><?php echo "$b";  ?></div>
<div class="kotak"><?php echo "$c";  ?></div>
</body>
</body>
</body>
</html>