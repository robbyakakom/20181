<?php
//Input
//Proses
$nim = $_POST["nim"] ;
$nama = $_POST["nama"] ;
$umur = $_POST["umur"] ;
$no_hp = $_POST["no_hp"] ;
$tinggi = $_POST["tinggi"] ;
$jenis_kelamin = $_POST["jenis_kelamin"] ;

//Output
echo "<h1>Data Mahasiswa</h1>" ;
echo "<hr/>" ;
echo "NIM : " . $nim . "<br/>" ;
echo "Nama : " . $nama . "<br/>" ;
echo "Umur : " . $umur . "<br/>" ;
echo "No.HP : " . $no_hp . "<br/>" ;
echo "Tinggi : " . $tinggi . "<br/>" ;
echo "Jenis Kelamin : " . $jenis_kelamin . "<br/>" ;
?>