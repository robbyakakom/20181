<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
	</head>
	<body>
		<input type="button" value="KIRIM" onclick="kirim()" />
		<div id="data">
			....
		</div>
	</body>
	<script>
		function kirim()
		{
			var data1 = "BUDI FIRMANSYAH" ;
			var xhttp = new XMLHttpRequest(); // mebuat objek xmlhttprequest
			
			xhttp.open("POST", "proses.php", false); //membuka layanan kirim data
			
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			
			xhttp.send("data=" + data1);
			//xhttp.send() ; //memerintahkan kirim
			
			document.getElementById("data").innerHTML = xhttp.responseText ; //hasil dari server dibaca dan ditulis pada HTML DOM
		}
	</script>
</html>