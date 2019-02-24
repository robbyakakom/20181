<?php 
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, "http://127.0.0.1/web_lanjut/sample/akdm/mhs_xml.php?nim=099");

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // menampilkan hasil curl
    // echo $output;
	
	$mhs = (array) simplexml_load_string($output); 
	//$mhs = json_decode($output,true) ;
	
	var_dump($mhs) ;
?>
