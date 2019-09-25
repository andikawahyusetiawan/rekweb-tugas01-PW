<?php 
$hari = ["senin","selasa","rabu"];

echo "array awal :";
print_r($hari);
echo "</br>";


echo "array setelah di pop :";
$hasil = array_pop($hari);
print_r($hari);
echo "<br>elemen yang di pop : $hasil <hr>";


echo "aray setelah di push :";
$hasil = array_push($hari, "kamis","jumat");
print_r($hari);
echo "</br>";


echo "array setelah di shift";
$hasil = array_shift($hari);
print_r($hari);
echo "<br>elemen yang di shift : $hasil <hr>";


echo "array setelah di unshift :";
$hasil = array_unshift($hari,"saptu","minggu");
print_r($hari);
 ?>