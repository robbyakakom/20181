<?php
$nim = $_GET['nim'] ;

$konek = mysqli_connect("localhost","root","","akademik") ;

$sql = "select * from mahasiswa where nim='".$nim."'" ;

$hasil = mysqli_query($konek, $sql) ;

$mahasiswa = mysqli_fetch_assoc($hasil) ;

header ("Content-Type:text/xml"); 

echo '<?xml version="1.0" encoding="UTF-8"?> ' ;
echo '<mahasiswa> ' ;
foreach($mahasiswa as $field=>$value){
	echo '<'.$field.'>'.$value.'</'.$field.'> ';
}
echo '</mahasiswa>' ;

header("Expires: 0");
?>

