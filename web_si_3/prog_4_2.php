<?php
// program kelulusan
// jika nilai > 60 maka keterangan adalah lulus 
// selain itu maka keterangan adalah tidak lulus

$nilai = 60 ;
$keterangan = null ;
if($nilai < 60){
	$keterangan = "TIDAK LULUS" ;
}else{
	$keterangan = "LULUS" ;
}

echo "NILAI = " . $nilai ;
echo "<br/>" ;
echo "KETERANGAN = " . $keterangan ;
?>