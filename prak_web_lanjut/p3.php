<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<script>
		function pindah() {
			var ob_1 = document.getElementById("t") ;
			var nil_1 = ob_1.innerHTML ;
			ob_1.innerHTML = "" ;
			var ob_2 = document.getElementById("baru") ;
			ob_2.innerHTML = nil_1 ;
		}
		
		function ubah() {
			document.body.style.backgroundColor = "red" ;
			document.body.style.fontSize = "36px" ;
			
		}
		</script>
	</head>
	<body>
		<input type="button" onclick="ubah()" value="Ubah Warna" /> 
		<div id="t" onclick="pindah()">INI ISI T</div>
		<hr/>
		<div id="baru"> ... </div>
	</body>
</html>