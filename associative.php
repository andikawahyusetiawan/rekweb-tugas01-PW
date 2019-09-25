<?php

$mahasiswa = [
"001" => "ahmad",
"002" => "budi",
"003" => "chika",
"004" => "dhini",
"005" => "erwin"
]

?>

<!DOCTYPE html>
<html>
<head>
	<title>array associayive</title>
</head>
<body>

<?php foreach ($mahasiswa as $nrp => $nama) : ?>

	<li><?php echo "$nrp : $nama" ?> </li>

<?php endforeach ?>

</body>
</html>