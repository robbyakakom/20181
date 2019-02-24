<?php
include("menu.php") ;
//break
//continue
//membuat tahun urut 2018 
for($tahun=2018 ; $tahun >= 2010 ; $tahun-- ){ 
	if($tahun == 2015){
		continue ;
	}
	echo "Tahun : ".$tahun."<br/>" ;
}
?>
