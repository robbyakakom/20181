<?php
header('Content-type: application/xml');
echo '<?xml version="1.0" encoding="UTF-8"?> ' ;

$nim = isset($_GET['nim']) ? $_GET['nim'] : '';
if($nim==""){
	echo '<mahasiswa> Invalid NIM </mahasiswa>' ;
	exit ;
}

$konek = mysqli_connect("localhost","root","","akademik") ;

$sql = "select * from mahasiswa where nim='".$nim."'" ;

$hasil = mysqli_query($konek, $sql) ;

$mahasiswa = mysqli_fetch_assoc($hasil) ;


echo '<mahasiswa> ' ;
if(count($mahasiswa) > 0){
	foreach($mahasiswa as $field=>$value){
		echo '<'.$field.'>'.$value.'</'.$field.'> ';
	}
	echo '</mahasiswa>' ;
}

?>

