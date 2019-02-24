<?php
//menangkap data
$nama_kelas = $_POST['nama_kelas'] ;
$nama_mk = $_POST['nama_mk'] ;
$jadwal = $_POST['jadwal'] ;

$mhs = $_POST['mhs'] ;
$angkatan = $_POST['angkatan'] ;

//koneksi
include("koneksi.php") ;

//sql master
$sql_master = "insert into master_kelas (nama_kelas, nama_matakuliah, jadwal) values ('{$nama_kelas}', '{$nama_mk}','{$jadwal}')" ;


//query master
$query_kelas = mysqli_query($koneksi,$sql_master) ;

if($query_kelas){
	$last_id = mysqli_insert_id($koneksi);
	$index = 0 ;
	foreach($mhs as $nim){
		if($nim == ""){
			continue ;
		}
		//sql detail
		$sql_detail = "insert into detail_kelas (id_kelas, nim, angkatan) values ('{$last_id}','{$nim}','{$angkatan[$index]}')" ;
		//query detail		
		$query_detil = mysqli_query($koneksi, $sql_detail) ;
				
		$index = $index + 1 ;
	}	
}

header("Location: daftar_kelas.php") ;

//tutup koneksi
mysqli_close($koneksi) ;
?>