<?php
session_start() ;

if(!(isset($_SESSION["user"]) && $_SESSION["user"]="Budi")){
	echo "Anda belum login..." ;
	echo "<br/><a href='index.php'>LOGIN</a>" ;
	exit;
}
?>
<?php
$nim = $_GET['nim'] ;

//membuat koneksi
$koneksi = mysqli_connect("localhost","root","","akdm") ;

//membuat sql
$sql = "delete from mahasiswa where nim = '{$nim}'" ;

//menjalankan query
$hasil = mysqli_query($koneksi, $sql) ;

//menutup koneksi
mysqli_close($koneksi) ;

header("Location: read.php") ;
?>