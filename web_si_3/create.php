<?php
//penangkapan data
$nim = $_POST['nim'] ;
$nama = $_POST['nama'] ;
$alamat = $_POST['alamat'] ;
$foto = $_FILES["foto"] ;

$namafilefoto = $_FILES["foto"]["name"] ;

$tempfile = $_FILES["foto"]["tmp_name"] ;

move_uploaded_file($tempfile,"gambar/".$namafilefoto) ;

//fitur create
include("koneksi.php") ;

//bahasa SQL
$sql = "insert into mahasiswa (nim, nama, alamat, foto) values ('{$nim}','{$nama}','{$alamat}','{$namafilefoto}')" ;

//menjalankan query
$hasil = mysqli_query($konek,$sql) ;
if($hasil){
	echo "Data berhasil disimpan" ;
	echo "<hr/>" ;
	echo "<a href='form_create.php' >Isi data lagi</a>" ;
}else{
	echo "Data gagal disimpan" ;
}

//menutup koneksi
mysqli_close($konek) ;
?>