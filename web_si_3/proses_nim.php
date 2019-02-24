<?php
$tahun = $_POST['tahun'] ;
$jurusan = $_POST['jurusan'] ;
$registrasi = $_POST['registrasi'] ;

$kode[] = substr($tahun,-2) ;

$jur = array(561=>"Sistem Informasi", 541=>"Teknik Informatika",311=>"Komputer Akuntansi",312=>"Manajemen Informatika",313=>"Teknik Komputer") ;

$kode[] = $jurusan ;

$kode[] = str_pad($registrasi,4,"0",STR_PAD_LEFT) ;

$nim = implode("",$kode) ;

echo "NIM : " . $nim ;
?>