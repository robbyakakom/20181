<?php
session_start() ;

if(!(isset($_SESSION["user"]) && $_SESSION["user"]="Budi")){
	echo "Anda belum login..." ;
	echo "<br/><a href='index.php'>LOGIN</a>" ;
	exit;
}
?>
<?php
	include("menu_mhs.php") ;
?>
<form action="create.php" method="post" enctype="multipart/form-data" >
	<h1>Create Mahasiswa</h1>
	NIM <br/>
	<input type="text" name="nim" value="" /> <br/>
	Nama <br/>
	<input type="text" name="nama" value="" /> <br/>
	Alamat <br/>
	<textarea name="alamat" cols="50" rows="3"></textarea> <br/>
	Foto <input type="file" name="foto" /> <br/>
	<hr/>
	<input type="submit" value="SIMPAN" />
</form>