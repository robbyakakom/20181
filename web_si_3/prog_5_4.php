<?php
include("menu.php") ;
$mahasiswa = array("Budi","Amir","Mira") ; //mendefinisikan array
echo $mahasiswa[1] ; //menampilkan nilai element
$mahasiswa[1] = "Rima" ; //mengganti nilai element array
echo "<br/>" ;
echo $mahasiswa[1] ; //menampilkan nilai element

?>