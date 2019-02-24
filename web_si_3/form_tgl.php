<form action="tampil_tgl.php" method="post">
	<fieldset>
		<legend>Tanggal</legend>
		Hari  <select name="h">
				<?php
				for($h=1;$h<=31;$h++){
					echo "<option value='{$h}'>{$h}</option>" ;
				}
				?>
		      </select>
		Bulan <select name="b">
				<?php
				for($b=1;$b<=12;$b++){
					echo "<option value='{$b}'>{$b}</option>" ;
				}
				?>
		      </select>
		Tahun <select name="t">
				<?php
				for($t=2018;$t<=2020;$t++){
					echo "<option value='{$t}'>{$t}</option>" ;
				}
				?>
		      </select>
	</fieldset>
	
	<input type="submit" value="TAMPIL" />
</form>