<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<script>
			var data = "" ;
			var jumlah = 0 ;
			function tambah() {
				var nim = form_input.nim.value ;
				var nama = form_input.nama.value ;
				var awal = "<table border='1'> <tr> <th>NIM</th> <th>Nama</th> </tr> " ;
				data = data + "<tr> <td> " + nim + " </td> <td> " + nama + "</td> </tr> " ;
				var akhir = "</table>" ;
							
				document.getElementById("tampil").innerHTML = awal + data + akhir;
				jumlah = jumlah + 1 ;
				document.getElementById("jum").innerHTML = jumlah ;
			}
		</script>
	</head>
	<body>
		<form name="form_input">
			NIM <input type="text" name="nim" /> <br/>
			Nama <input type="text" name="nama" /> <br/>
			<input type="button" value="TAMBAHKAN" onclick="tambah()" />
		</form>
		<h1>Data Mahasiswa (<span id="jum"> </span>)</h1>
		<div id="tampil"> </div>
	</body>
</html>

