<?php
	include("menu_mhs.php") ;
?>
<?php
$nama = isset($_POST['cari_nama']) ? $_POST['cari_nama'] : "";

include("koneksi.php") ;

//membuat sql = membaca = select
if($nama == ""){
	$sql = "select * from mahasiswa" ;
}else{
	$sql = "select * from mahasiswa where nama = '{$nama}'" ;
}

//menjalankan query
$hasil = mysqli_query($koneksi, $sql) ;
?>
<table border="1" >
	<caption>DATA MAHASISWA</caption>
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Foto</th>
		<th>OPERASI</th>
	</tr>
<?php
//melakukan fetch menjadi array
while($row = mysqli_fetch_assoc($hasil)){
	//menapilkan data array
	?>	
	<tr>
		<td> <?php echo $row["nim"] ?> </td>
		<td> <?php echo $row["nama"] ?> </td>
		<td> <?php echo $row["alamat"] ?> </td>
		<td> <img alt="" src="gambar/<?php echo $row["foto"] ?>" width="200" /> </td>
		<td> <a href="update_form.php?nim=<?php echo $row["nim"] ?>">UPDATE</a> |  
		<a href="delete.php?nim=<?php echo $row["nim"] ?>">DELETE</a>  
		</td>
	</tr>
	<?php
}
?>

</table>	

<?php
//menutup koneksi
mysqli_close($koneksi) ;
?>