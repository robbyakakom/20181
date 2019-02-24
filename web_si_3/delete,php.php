<?php
$nim = $_GET['nim'] ;

include("koneksi.php") ;

//membuat sql
$sql = "delete from mahasiswa where nim = '{$nim}'" ;

//menjalankan query
$hasil = mysqli_query($koneksi, $sql) ;

//menutup koneksi
mysqli_close($koneksi) ;
?>