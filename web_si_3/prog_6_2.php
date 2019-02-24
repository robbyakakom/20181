<form action="proses_nim.php" method="post">
	Tahun <br/>
	<select name="tahun">
		<?php
		$tahunSekarang = date("Y") ;
		$tahunSebelumnya = $tahunSekarang - 5;
		$tahunBerikutnya = $tahunSekarang + 5;
		?>
		
		<?php
		for($t=$tahunSebelumnya; $t<=$tahunBerikutnya;$t++){
			?>
			<option value="<?php echo $t ?>">
				<?php echo $t ?>
			</option>
			<?php 
		} 
		?>
		
	</select> <br/>
	<?php
		$jur = array(561=>"Sistem Informasi", 541=>"Teknik Informatika",311=>"Komputer Akuntansi",312=>"Manajemen Informatika",313=>"Teknik Komputer") ;
	?>
	Jurusan<br/>
	<select name="jurusan">
		<?php
			foreach($jur as $kode => $nama_jur){
				?>
				<option value="<?php echo $kode ?>">
					<?php echo $nama_jur ?></option>
				<?php
			}
		?>
	</select> <br/>
	Nomor Registrasi<br/>
	<input type="text" name="registrasi" /> <hr/>
	<input type="submit" value="TAMPIL NIM" />
</form>