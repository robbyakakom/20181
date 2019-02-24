<?php
session_start() ;

if(!(isset($_SESSION["user"]) && $_SESSION["user"]="Budi")){
	echo "Anda belum login..." ;
	exit;
}
?>

<?php
	include("menu_mhs.php") ;
?>

<?php
$nim = $_GET['nim'] ;

//membuat koneksi
$koneksi = mysqli_connect("localhost","root","","akdm") ;

//mebuat sql
$sql = "select * from mahasiswa where nim = '{$nim}' " ;

//menjalankan query
$hasil = mysqli_query($koneksi, $sql) ;

//lakukan fetch 
$row = mysqli_fetch_assoc($hasil) ;

?>
<form action="update.php" method="post" enctype="multipart/form-data" >
	<h1>Update Mahasiswa</h1>
	NIM <br/>
	<input type="text" name="nim" value="<?php echo $row['nim'] ?>" /> <br/>
	Nama <br/>
	<input type="text" name="nama" value="<?php echo $row['nama'] ?>" /> <br/>
	Alamat <br/>
	<textarea name="alamat" cols="50" rows="3"><?php echo $row['alamat'] ?></textarea> <br/>
	Foto <input type="file" name="foto" /> <br/>
	<hr/>
	<input type="submit" value="SIMPAN" />
</form>