<?php
session_start() ;

session_destroy();

echo "Anda sudah logout..." ;
echo "<br/><a href='index.php'>LOGIN</a>" ;
?>