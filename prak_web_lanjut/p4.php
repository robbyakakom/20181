<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<script>
			var daftar_nama = "" ;
			var isi = "" ;
			function tambah() {
				var isi = parseFloat(form_input.nama.value) ;
				form_input.nama.value = "" ;
				daftar_nama = daftar_nama + isi + "<br/>" ;
				var ob_d = document.getElementById("daftar") ;
				ob_d.innerHTML = daftar_nama ;
			}
		</script>
	</head>
	<body>
		<form name="form_input" action="">
			INPUT NAMA <input type="text" id="nama" name="nama" />
			<input type="button" onclick="tambah()" value="TAMBAHKAN" />
		</form>
		<h1>DAFTAR NAMA</h1>
		<div id="daftar">
		
		</div>
	</body>
<html>