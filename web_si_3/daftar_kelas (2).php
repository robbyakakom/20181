<?php
session_start() ;

if(isset($_SESSION["user"]) && $_SESSION["user"]="Budi"){


	include("menu_mhs.php") ;


//membuat koneksi
include("koneksi.php") ;

//sql
$sql = "select master_kelas.id_kelas, master_kelas.nama_kelas, master_kelas.nama_matakuliah, master_kelas.jadwal, detail_kelas.nim, mahasiswa.nama, detail_kelas.angkatan from master_kelas 
inner join detail_kelas on master_kelas.id_kelas = detail_kelas.id_kelas
inner join mahasiswa on mahasiswa.nim = detail_kelas.nim
" ;

//query
$query = mysqli_query($koneksi, $sql) ;

?>
<h1>Daftar Kelas</h1>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama Kelas</th>
		<th>Nama Matakuliah</th>
		<th>Jadwal</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Angkatan</th>
	</tr>
	<?php
	while($row = mysqli_fetch_assoc($query)) {
	?>
	<tr>
		<td> <?php echo $row['id_kelas'] ?> </td>
		<td> <?php echo $row['nama_kelas'] ?> </td>
		<td> <?php echo $row['nama_matakuliah'] ?> </td>
		<td> <?php echo $row['jadwal'] ?> </td>
		<td> <?php echo $row['nim'] ?> </td>
		<td> <?php echo $row['nama'] ?> </td>
		<td> <?php echo $row['angkatan'] ?> </td>
	</tr>
	<?php
	}
	?>
</table>

<?php

//tutup koneksi
mysqli_close($koneksi) ;

}else{
	echo "Anda belum login..." ;
	echo "<br/><a href='index.php'>LOGIN</a>" ;
}
?>