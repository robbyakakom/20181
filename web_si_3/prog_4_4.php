<?php
//jika nilai = "A" maka keterangan = "Sangat Baik"
//jika nilai = "B" maka keterangan = "Baik"
//jika nilai = "C" maka keterangan = "Cukup"
//jika nilai = "D" maka keterangan = "Kurang"
//selain itu keterangan = "Sangat Kurang"
echo "program dengan switch <hr/>";

$nilai = "D";
$keterangan = null ;

switch($nilai)
{
	case "A" :
		$keterangan = "Sangat Baik" ;
		break;
	case "B" :
		$keterangan = "Baik" ;
		break;
	case "C" :
		$keterangan = "Cukup" ;
		break;
	case "D" :
		$keterangan = "Kurang" ;
		break;
	default :
		$keterangan = "Sangat Kurang" ;
}

echo "Nilai = " . $nilai ;
echo "<br/>" ;
echo "Keterangan = " . $keterangan ;

?>