<?php
//input
$bil_3 = 0 ;
$bil_1 = $_GET["bil_1"] ;
$bil_2 = $_GET["bil_2"] ;

//proses
$bil_3 = $bil_1 + $bil_2 ;

//output
echo "<h1>HASIL TAMBAH</h1>" ;
echo "Bil A " . $bil_1 . "<br/>" ;
echo "Bil B " . $bil_2 . "<br/>" ;
echo "Bil C " . $bil_3 . "<br/>" ;
?>