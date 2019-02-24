<?php
require_once("prog_5_3.php") ;
require_once("menu.php") ;
//membuat angka urut 10 s/d 100, jangka 10

$z = 10 ;
do{
	echo "nilai " . $z . "<br/>" ;
	$z = $z + 10 ;
}while($z >= 100)

?>