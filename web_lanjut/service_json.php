<?php
header('Content-type: application/json');
//header('Content-Disposition: attachment; filename="downloaded.json"');

$nim = isset($_GET["nim"]) ? $_GET["nim"] : "" ;

$konek = mysqli_connect("localhost","root","","akdm") ;

$sql = "select * from mahasiswa where nim='".$nim."'" ;

$query = mysqli_query($konek, $sql) ;

$mahasiswa = mysqli_fetch_assoc($query) ;

$jsonMhs = json_encode($mahasiswa) ;

echo $jsonMhs ;

?>