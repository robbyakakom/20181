<?php
//menangkap data
$nim = $_POST["nim"] ;
$nama = $_POST["nama"] ;
$alamat = $_POST["alamat"] ;
$foto = $_FILES["foto"] ;

include("koneksi.php") ;

//membuat sql
$sql = "update mahasiswa set nim='{$nim}', nama='{$nama}', alamat='{$alamat}', foto='{$foto['name']}' where nim = '{$nim}'" ;

//menjalankan query 
$hasil = mysqli_query($koneksi,$sql) ;

//menutup koneksi
mysqli_close() ;

move_uploaded_file($foto["tmp_name"],"gambar/".$foto['name']) ;

header("Location: read.php") ;
?>