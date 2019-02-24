<?php
session_start() ;

if(!(isset($_SESSION["user"]) && $_SESSION["user"]="Budi")){
	echo "Anda belum login..." ;
	echo "<br/><a href='index.php'>LOGIN</a>" ;
	exit;
}
?>
<?php
include("koneksi.php") ;
include("menu_mhs.php") ;
?>
<h1>Input Data Kelas</h1>
<form action="proses_kelas.php" method="post" >
	Kelas <br/>
	<table>
		<tr>
			<td>Nama Kelas</td>
			<td><input type="text" name="nama_kelas" /></td>
		</tr>
		<tr>
			<td>Nama Matakuliah</td>
			<td><input type="text" name="nama_mk" /></td>
		</tr>
		<tr>
			<td>Jadwal</td>
			<td><input type="text" name="jadwal" /></td>
		</tr>
	</table>

	  <hr/>
	Peserta <br/>
	<table>
		<tr>
			<th>No</th>
			<th>NIM / Nama</th>
			<th>Angkatan</th>
		</tr>
		<?php
		for($n=0;$n<5;$n++){
			?>
			<tr>
				<td> <?php echo $n+1 ?> </td>
				<td> 
					<select name="mhs[]"> 
						<option value="" selected> - </option>
						<?php
						
						//membuat SQL
						$sql_mhs = "select * from mahasiswa" ;

						//jalankan query
						$query_mhs = mysqli_query($koneksi,$sql_mhs) ;

						//fetch
						while($row_mhs = mysqli_fetch_assoc($query_mhs)) {
							?>
							<option value="<?php echo $row_mhs['nim'] ?>"><?php echo $row_mhs['nim']." / ".$row_mhs['nama'] ?></option>
							<?php
						}
						?>
					<select>
				</td>
				<td> <input type="text" name="angkatan[]" /> </td>
			</tr>
			<?php
		}
		?>		
	</table>
	<hr/>
	<input type="submit" value="SIMPAN" />
</form>

<?php
//tutup koneksi
mysqli_close($koneksi)
?>