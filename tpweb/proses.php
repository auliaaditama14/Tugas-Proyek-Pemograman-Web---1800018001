<?php
echo "<head><title>GUEST BOOK</title></head>";

$fp = fopen("tamu.txt", "a+"); //fungsi untuk membuka data file txt tamu.txt sekaligus menggunakan metode append 'a+' untuk data dapat ditambahkan
$nama		= $_POST['nama']; //menampung isi  data _POST nama dalam form sebelumnya kedalam variabel $nama
$tanggal	= $_POST['tanggal']; //menampung isi  data _POST tanggal dalam form sebelumnya kedalam variabel $tanggal
$jk			= $_POST['jk']; //menampung isi  data _POST jenis kelamin dalam form sebelumnya kedalam variabel $jk
$alamat		= $_POST['alamat']; //menampung isi  data _POST alamat dalam form sebelumnya kedalam variabel $alamat
$agama		= $_POST['agama']; //menampung isi  data _POST agama dalam form sebelumnya kedalam variabel $agama

fputs($fp, "$nama|$tanggal|$jk|$alamat|$agama\n"); //menulis data inputan yang sudah divariabelkan sebelumnya kedalam notepad 
fclose($fp); //menutup data file tamu.txt
if($fp!=0){ //kondisi dimana jika data $fp tidak sama dengan kosong maka data akan langsung menuju ke halaman daftar_tamu.php
	header("location: daftar_fans.php");
}
else{ //selain itu, maka akan tampil ddata tidak masuk
	echo "Data Tidak Masuk !!!";
}
//echo "<table>
//<tr><td>Nama</td><td>:</td><td>$nama</td><tr>
//<tr><td>Password</td><td>:</td><td>$pass</td><tr>
//<tr><td>Jenis Kelamin</td><td>:</td><td>$jk</td><tr>
//<tr><td>Alamat</td><td>:</td><td>$alamat</td><tr>
//<tr><td>Asal Kota</td><td>:</td><td>$asal</td><tr>
//<table>";



?>