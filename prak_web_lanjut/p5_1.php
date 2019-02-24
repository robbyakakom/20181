<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
	</head>
	<body>
		<h1>
			Judul Artikel
		</h1>
		<input type="button" value="Halaman 1" onclick="buka1()" />
		<input type="button" value="Halaman 2" onclick="buka2()"/>
		<div id="isi" style="height:500px; border:thin solid black;" >
			
		</div>
		<script>
			function buka1(){
				var xhttp = new XMLHttpRequest();
				xhttp.open("GET", "h2.php", false);
				xhttp.send();
				document.getElementById("isi").innerHTML = xhttp.responseText ;
			}
			
			function buka2() {
				var xhttp = new XMLHttpRequest();
				xhttp.open("GET", "materi.txt", true);
				xhttp.send();
				xhttp.onreadystatechange = function() {
				  if (this.readyState == 4 && this.status == 200) {
					document.getElementById("isi").innerHTML = this.responseText;
				  }
				  
				  if(this.status == 404){
					  document.getElementById("isi").innerHTML = "halaman tidak ditemukan" ;
				  }
				};
			}
		</script>
	</body>
</html>