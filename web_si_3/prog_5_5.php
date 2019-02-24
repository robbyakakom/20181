<?php
$mahasiswa["0009"] = "Budi" ;
$mahasiswa["0984"] = "Amir" ;
$mahasiswa["07776"] = "Mira" ;
?>

<ol>
	<?php
		foreach($mahasiswa as $nim => $nama ) {
			?>
			<li> <?php echo "NIM : ". $nim. " / Nama : ". $nama ?> </li>
			<?php
			}
	?>
</ol>