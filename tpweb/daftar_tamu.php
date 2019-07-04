<!DOCTYPE html>
<html>
<head>
	<title>Post Test PWeb</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<script language="javascript" src="js/java.js"></script>
</head>
<body>

<div class="header">
	
</div>

<div class="menubar">
		<ul>
			<li><a href="tampilan.html"><b>Home</b></a></li>
			<li><a href="daftar_fans.php"><b>List Fans</b></a></li>
			<li><a href="news.html"><b>News</a></b></li>
			<li><a href="album.html"><b>Album</b></a></li>
			<li><a href="cari.html"><b>Search</b></a></li>
			<form name="formcari" onsubmit="cari()"><pre>
											         <input class="Search" name="keyword" type="text" placeholder="Search...." required><input class="button" type="submit" value="Search" onclick="sayHello()">
			 </pre></form>
		</ul>
</div>	

<div class="menu1">
	<ul>
		<br>
			<li><a href="https://www.youtube.com/watch?v=smft3ecWTKk">Videos Song Linkin Park</a></li>
			<li><a href="https://www.instagram.com/auliaaditama_/">Profil Pembuat Website</a></li>
	</ul>
</div>

<div class="menu2">
	<center>
		<h2><font face="rog fonts" color="white">LIST OF LINKIN PARK FANS DATA</font></h2>
		<hr width="88%">
	</center>
	<?php
	error_reporting(0);
	$bil = 1;
	echo "<head><title>GUEST BOOK</title></head>";

	$fp = fopen("tamu.txt", "r"); //fungsi untuk membuka file notepad dengan fopen yang ditampung didalam variabel $fp
	echo "<table border=1 width=95%>"; 
	echo "<th>No.</th>";
	echo "<th>Nama Lengkap</th>";
	echo "<th>Tanggal Lahir</th>";
	echo "<th>Jenis Kelamin</th>";
	echo "<th>Alamat</th>";
	echo "<th>Agama</th>";
	while($isi = fgets($fp,80)) //perulangan untuk menampilkan data. menggunakan fungsi fgets untuk  mengambil data di dalam file tamu.txt
	{
		$pisah = explode("|",$isi); //explode berfungsi memisahkan string data didalam notepad dengan menggunakan parameter pemisah "|"
		echo "<tr><td><center>$bil.</center></td>";
		echo "<td><center>$pisah[0]</center></td>"; //menampilkan data dalam indeks 0 di variabel $pisah
		echo "<td><center>$pisah[1]</center></td>";	//menampilkan data dalam indeks 1 di variabel $pisah
		echo "<td><center>$pisah[2]</center></td>";	//menampilkan data dalam indeks 2 di variabel $pisah
		echo "<td><center>$pisah[3]</center></td>";	//menampilkan data dalam indeks 3 di variabel $pisah
		echo "<td><center>$pisah[4]</center></td></tr>"; //menampilkan data dalam indeks 4 di variabel $pisah
	$bil++; //variabel untuk menambah data setiap perulangan
	}
	echo "</table>";
	echo "<br>";
	echo "<a class=btn1 href=index.html> <font color='white'>Isi Data Fans</font></a>&nbsp";
	echo "<a class=btn2 href=album.html><font color='white'> Album </font></a>";
	
	


	?>
	
</div>

<div class="menu3">
	<center><p><font color="white">Picture Linkin Park :</font></p>
		<br>
	<a target="_blank" href="img/lk.jpg">
	<img src="img/lk.jpg" width="200" height="250"></a>
	<br><h3><font color="white"> FOLLOW US</h3></font>
	<a href="https://www.instagram.com/linkinpark/?hl=id"><img src="img/ig.png" width="100" height="100"></a>
	<br><h3><font color="white"> CHANNEL BY</h3></font>
	<a href="https://www.youtube.com/channel/UCZU9T1ceaOgwfLRq7OKFU4Q"><img src="img/yt.png" width="100" height="70"></a> 
	</center>
</div>

<div class="footer">
		
</div>

</body>
</html>