<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<style type="text/css">
			#blok_warna{
				background-color: #0F0 ;
				height: 300px;
				width: 100%;
			}
		</style>
	</head>
	<body>
		<div id="blok_warna">
			warna
		</div>
		<input type="button" value="MERAH" onclick="document.getElementById('blok_warna').style.backgroundColor = '#F00'"> 
		<input type="button" value="BIRU" onclick="document.getElementById('blok_warna').style.backgroundColor = '#00F'"> 
		<input type="button" value="HIJAU" onclick="document.getElementById('blok_warna').style.backgroundColor = '#0F0'"> 
		<input type="button" value="KUNING" onclick="document.getElementById('blok_warna').style.backgroundColor = 'yellow'"> 
		<hr/>
		<input type="button" value="buka p 4 1" onclick="tampilkan()"/>
	
		
		<script>
		function tampilkan() {
			document.getElementById("blok_warna").innerHTML = "<img src='giphy.gif' />" ;
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "p_4_1.php", true);
			xhttp.send();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("blok_warna").innerHTML =
					this.responseText;
			   }
			};
		}
		</script>
	</body>
</html>







