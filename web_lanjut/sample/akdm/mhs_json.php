<?php
$nim = isset($_GET['nim']) ? $_GET['nim'] : "";

$konek = mysqli_connect("localhost","root","","akademik") ;

$sql = "select * from mahasiswa where nim='".$nim."'" ;

$hasil = mysqli_query($konek, $sql) ;

$mahasiswa = mysqli_fetch_assoc($hasil) ;

// header('Content-disposition: attachment; filename=file.json');
header('Content-type: application/json');

echo json_encode($mahasiswa);

header("Expires: 0");
?>

