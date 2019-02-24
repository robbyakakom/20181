<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<script src="jquery-3.3.1.min.js"> </script>
	</head>
	<body>
		<div id="pesan"> <h1>isi di div</h1> </div>
		Nama : 
		<input type="text" id="nama" name="nama" />
	</body>
	<script>
		$(document).ready(function() {
			$("#pesan").click(function(){
				var isi = $(this).html() ;
				alert(isi) ;
			} )
			
			$("#nama").blur(function() {
				var isi = $(this).val() ;
				$("#pesan").text(isi) ;
			} )
		}) ;
	</script>
</html>