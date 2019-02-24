<?php
//jika ipk >= 3.5 maka ket = cumlaude
//jika ipk >= 2.5 dan ipk < 3.5 maka ket = memuaskan
//selain itu ket = ""

$ipk = 3.5 ;
$ket = null ;

if($ipk >= 3.5){
	$ket = "Cumlaude" ;
}elseif($ipk >= 2.5 and $ipk < 3.5 ){
	$ket = "Memuaskan" ;
}else{
	$ket = "-" ;
}

echo "IPK = " . $ipk ;
echo "<br/>" ;
echo "Keterangan = " . $ket ;

?>