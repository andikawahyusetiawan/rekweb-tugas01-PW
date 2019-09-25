<?php 

$budaya = [
	[
	"Adat" => "Ritual masyarakat",
	"Nama Budaya" => "Ritual Tiwah",
	"Daerah" => "Kalimantan Tengah",
	"Gambar" => "01.jpg",
	"Sinopsis" => "Budaya unik yang pertama disebut Ritual Tiwah, sejenis upacara mengantarkan tulang belulang orang yang sudah meninggal ke tempat peristirahatan terakhirnya yaitu sandung, dengan harapan orang yang ditiwahkan mencapai syurga. "
	],

	[
	"Adat" => "Ritual Masyarakat",
	"Nama Budaya" => "Kebo-keboan",
	"Daerah" => "Banyuwangi",
	"Gambar" => "02.jpg",
	"Sinopsis" => "Upacara ini biasanya diadakan pada hari minggu. Sesuai namanya, ritual ini biasanya mendandani orang menjadi seekor kebo,Tujuannya untuk meminta hujan turun ditengah musim kemarau."
	],

	[
	"Adat" => "Tradiri nenek monyang leluhur",
	"Nama Budaya" => "Mapasilaga Tedong",
	"Daerah" => "Tana Toraja",
	"Gambar" => "03.jpg",
	"Sinopsis" => "Tradisi ini dibawa secara turun temurun yang dilakukan di Tana Toraja. Tradisi ini diadakan hanya untuk menghormati para leluhur."
	],

	[
	"Adat" => "adat masyarakat sumba",
	"Nama Budaya" => "Pasola",
	"Daerah" => "Sumba,Nusa Tenggara Timur",
	"Gambar" => "04.jpg",
	"Sinopsis" => "Pasola artinya lembing kayu yang digunakan untuk melempar, “pa” dari pasola adalah kalimat imbuhan. Pasola berarti melemparkan lembing kayu sambil memacu seekor kuda."
	],

	[
	"Adat" => "Tradisi budaya",
	"Nama Budaya" => "Dugderan",
	"Daerah" => "Semarang",
	"Gambar" => "05.jpg",
	"Sinopsis" => "Dugderan adalah tradisi budaya khas Semarang yang telah diadakan sejak tahun 1881, dimana dugderan adalah salah satu cara mencurahkan rasa rindu mereka pada bulan Ramadhan atau bulan seribu berkah."
	],

	[
	"Adat" => "Tradisi pringatan hari besar",
	"Nama Budaya" => "Tabuik",
	"Daerah" => "Minangkabau,Sumatra Barat",
	"Gambar" => "06.jpg",
	"Sinopsis" => "Bertujuan untuk memperingati Asyura, gugurnya Imam Husain seorang cucu dari Nabi Muhammad SAW. Biasa kita kenang di tanggal 10 Muharram pada kalender tahunan."
	],

	[
	"Adat" => "Tradisi masyarakat",
	"Nama Budaya" => "Makepung",
	"Daerah" => "Bali",
	"Gambar" => "07.jpg",
	"Sinopsis" => "Makepung mengandung arti Balapan Kerbau, tradisi ini dilakukan masyarat Bali hanya untuk hiburan saja, menurut masyarakat Bali binatang kerbau adalah binatang yang suci. Awalnya tradisi ini dilakukan hanya untuk membajak sawah saja. Namun seiring dengan waktu, tradisi ini banyak diminati bahkan menjadi salah satu tradisi yang banyak menarik wisatawan asing,"
	],

	[
	"Adat" => "Budaya Seni bela diri",
	"Nama Budaya" => "Debus",
	"Daerah" => "Banten",
	"Gambar" => "08.jpg",
	"Sinopsis" => "Debus merupakan salah satu seni bela diri berasal dari Banten, aksi bela diri ini dipercaya sudah ada sejak abad ke 16, namun pada saat itu Debus adalah sebuah kesenian dari hasil kombinasi suara dan seni tari. "
	],

	[
	"Adat" => "Tradisi Budaya masyarakat",
	"Nama Budaya" => "Karapan Sapi",
	"Daerah" => "Madura",
	"Gambar" => "09.jpg",
	"Sinopsis" => "Karapan Sapi adalah budaya yang telah menjadi tradisi untuk menaikan status sosial seseorang. Terlebih kota Madura memiliki tanah yang kering membuat masyarakat berpindah profesi dari pertani menjadi seorang nelayan."
	],

	[
	"Adat" => "Ritual Sesajen leluhur",
	"Nama Budaya" => "Kasada",
	"Daerah" => "Bromo",
	"Gambar" => "10.jpg",
	"Sinopsis" => "Kasada adalah ritual yang dilakukan oleh masyarakat Bromo, yang berlangsung di hari ke- 14 pada bulan Kasada. Upacara ini berbentuk penyembahan sesajen kepada Sang Hyang Widhi sebagai bentuk syukur untuk kesehatan dan hasil panen yang melimpah."
	]

];

?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>tugas2</title>    
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
 </head>

 <body>	
 	
 	<br>
  <h1 style="text-align: center;">Budaya Daerah di Indonesia</h1>
  <br>

  <table class="table table-bordered table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col" id="head" width="50px">No</th>
      <th scope="col" id="head" width="180px">Adat</th>
      
      <th scope="col" id="head" width="220px">Nama Budaya</th>
      <th scope="col" id="head" width="200px">Daerah</th>
      <th scope="col" id="head" width="auto">Gambar</th>
      <th scope="col" id="head" width="350px">Sinopsis</th>
    </tr>
  </thead>
  <?php $i = 1; ?>
  <?php foreach ($budaya as $p): ?>
  <tbody>
    <tr>
      <th id="head"scope="row"><?php echo $i++; ?></th>
      <td id="head"><?php echo $p["Adat"]; ?></td>
      <td id="head"><?php echo $p["Nama Budaya"]; ?></td>
 	  <td id="head"><?php echo $p["Daerah"]; ?></td>
 	  <td id="head"><img src="../Assets/img/<?= $p["Gambar"]; ?>"></td>
 	  <td id="head"><?php echo $p["Sinopsis"]; ?></td>
    </tr>
  </tbody>
  <?php endforeach ?>
</table>
</body>
 </html>


