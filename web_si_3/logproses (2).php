<?php
session_start() ;

//tangkap data dari form
$user = $_POST["user"] ;
$pass = $_POST["password"] ;

$dataUser = "Budi" ;
$dataPassword = "555" ;

if($user == $dataUser && $pass == $dataPassword){
	$_SESSION["user"] = $dataUser ;
	header("Location: daftar_kelas.php") ;
}else{
	echo "USER dan PASSWORD salah..." ;
}
?>