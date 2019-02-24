<?php
//jika nilai = "A" maka keterangan = "Sangat Baik"
//jika nilai = "B" maka keterangan = "Baik"
//jika nilai = "C" maka keterangan = "Cukup"
//jika nilai = "D" maka keterangan = "Kurang"
//selain itu keterangan = "Sangat Kurang"

$nilai = "B" ;
$keterangan = null ;
if($nilai == "A"){
	$keterangan = "Sangat Baik" ;
}elseif($nilai == "B"){
	$keterangan = "Baik" ;
}elseif($nilai == "C" ){
	$keterangan = "Cukup" ;
}elseif($nilai == "D"){
	$keterangan = "Kurang" ;
}else{
	$keterangan = "Sangat Kurang" ;
}

echo "Nilai = " . $nilai ;
echo "<br/>" ;
echo "Keterangan = " . $keterangan ;
?>