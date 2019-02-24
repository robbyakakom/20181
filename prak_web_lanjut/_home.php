<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
	</head>
	<body>
		<h1>WELCOME</h1>
		<input type="button" value="INPUT NILAI" onclick="input()"  />
		<div id="form" style="border: thin solid black; padding: 10px;"> </div>
		<div id="hasil" style="border: thin solid black; padding: 10px;"> </div>
	</body>
	<script>
		function input(){
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "form_nilai.php", true);
			xhttp.send();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				  document.getElementById("form").innerHTML =
				  this.responseText;
				}
			  };
		}
	</script>
	<script>
		function proses(){
			var xhttp = new XMLHttpRequest();
			xhttp.open("GET", "hasil.php", true);
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