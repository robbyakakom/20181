<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
	</head>
	<body>
		<div style="width:400px; margin:auto; padding:50px; border: thin solid blue">
			<form>

				<h1>Form Cari Mahasiswa </h1>
				NIM <input type="text" name="nim" onkeyup="cari(this.value)"/>
			</form>
			<h3>Hasil Pencarian</h3>
			<div id="hasil">

			</div>
		</div>
	</body>
	<script>
		function cari(txt){
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "hasil_cari.php?nim="+txt, true);
			xhttp.send();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("hasil").innerHTML =
					this.responseText;
			   }
			};
		}
	</script>
</html>