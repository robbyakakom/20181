<?php
	$txt = "STMIK AKAKOM" ;
	print($txt) ;
	echo "<hr/>" ;
	
	$tgl = date("l ,j F Y");
	echo $tgl ;
	echo "<hr/>" ;
	
	$tm = strtotime("15-10-2018") ;
	echo $tm ;
	echo "<hr/>" ;
	
	$tglLahir = "1999-04-02" ;
	$tmL = strtotime($tglLahir) ;
	$namaHr = date("l",$tmL);
	echo $namaHr ;
	echo "<hr/>" ;
	
	echo(date("l, j F Y, H:i:s ",strtotime("+1 week 3 days 7 hours 5 seconds")));
	
	echo "<hr/>" ;
	
	$nim = "175610013" ;
	
	echo substr($nim,5) ;
	echo "<hr/>" ;
	echo substr($nim,2,3) ;
	echo "<hr/>" ;
	echo (int) substr($nim,-4) ;
	echo "<hr/>" ;
	
	for($i=1;$i<100;$i++) {
		echo str_pad($i,4,"0",STR_PAD_LEFT) ;
		echo "<br/>" ;
	}
	
	
	
	
?>