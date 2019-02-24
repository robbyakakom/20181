<?php
header('Content-type: application/xml');
//header('Content-Disposition: attachment; filename="downloaded.xml"');

$nim = isset($_GET["nim"]) ? $_GET["nim"] : "" ;

$konek = mysqli_connect("localhost","root","","akdm") ;

$sql = "select * from mahasiswa where nim='".$nim."'" ;

$query = mysqli_query($konek, $sql) ;

$mahasiswa = mysqli_fetch_assoc($query) ;

echo '<?xml version="1.0" encoding="UTF-8"?> ' ;
echo '<mahasiswa> ' ;
foreach($mahasiswa as $field=>$value){
	echo '<'.$field.'>'.$value.'</'.$field.'> ' ;
}
echo '</mahasiswa> ' ;

?>