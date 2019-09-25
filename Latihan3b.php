<?php 

echo "Jelaskan apa perbedaan fungsi isset( ) dan empty. Berikan Contohnya dan tampilkan 
jawaban ke layar ?</br></br>";


//ini isset
echo "<b>isset() digunakan untuk menyatakan variabel yang sudah diset atau tidak. Jika variabel sudah diset maka variabel akan mengembalikan nilai true, sebaliknya akan bernilai false.</br></b>";
echo "Contoh :<br>";
echo "
		if (isset(var)) { </br> 
			echo 'variable var sudah ada isinya'; </br> 
		}else{  </br>
			echo 'variable var belum terisi!'; </br> 
		} </br></br>" ;

echo "Hasilnya = True.</br>";
$x=10;
if(isset($x)){  
	echo "variable var sudah ada isinya!</br></br>";  
}else{  
     echo "variable var belum terisi!";  
}

echo "Hasilnya = False.</br>";
if(isset($VAR)){  
	echo "variable var sudah ada isinya!";  
}else{  
     echo "variable var belum terisi!<br></br></br>";  
}



//ini empty
echo "<b>Fungsi empty() merupakan fungsi yang digunakan untuk mengecek data atau variabel yang kosong.</b></br>";
echo "Contoh :</br>";
echo "
		if (empty(var)) { </br> 
			echo 'variable var sudah ada isinya'; </br> 
		}else{  </br>
			echo 'variable var belum terisi!'; </br> 
		} </br></br>" ;

echo "Hasilnya = False.</br>";
$angka="wahyu";
if(empty($angka)){  
	echo "variable var sudah ada isinya!";  
}else{  
     echo "variable kosong!</br></br>";  
}

echo "Hasilnya = True.</br>";
$huruf="";
if(empty($huruf)){  
	echo "variable var sudah ada isinya!";  
}else{  
     echo "variable kosong!<br></br></br>";  
}
 ?>