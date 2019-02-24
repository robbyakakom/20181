<?php
//program operator OR / ||
//jika kata1 = "rajin" atau kata2 = "pandai" maka ket = "kaya"

$kata1 = "";
$kata2 = "";
$ket = null ;

if($kata1 == "rajin" || $kata2 == "pandai" ){
	$ket = "kaya" ;
}

echo "kata 1 " . $kata1 ;
echo "<br/>" ;
echo "kata 2 " . $kata2 ;
echo "<br/>" ;
echo "ket " . $ket ;
echo "<br/>" ;

?>