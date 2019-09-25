<?php 
$nama = ["ahmad","budi","chika","dhini","erwin"];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>looping for array</title>
 </head>
 <body>
 		<?php 

 			for($i=0;$i<count($nama);$i++) {
 				echo "<li>$nama[$i]</li>";
 			}

 		 ?>



 </body>
 </html>