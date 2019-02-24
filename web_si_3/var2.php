<?php
//Input 
//Proses
$nim = "0987900"; //string
$nama = "BUDI"; //string
$umur = 20 ; //integer
$no_hp = "088876234234" ; //string
$tinggi = 1.71 ; //float
$jenis_kelamin = true ; //boolean

//output
echo "<h1>Data Mahasiswa</h1>" ;
echo "<hr/>" ;
echo "NIM : " . $nim . "<br/>" ;
echo "Nama : " . $nama . "<br/>" ;
echo "Umur : " . $umur . "<br/>";
echo "No. HP : " . $no_hp . "<br/>" ;
echo "Tinggi : " . $tinggi . "<br/>" ;
//proses
//variabel ternary (kondisi ? nilai_true : nilai_false)
$hasil_jenis_kel = $jenis_kelamin ? "Laki-laki" : "Perempuan" ;
echo "Jenis Kelamin : " . $hasil_jenis_kel ."<hr/>" ;
?>