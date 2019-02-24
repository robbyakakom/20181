<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<script src="jquery/jquery-3.3.1.min.js"> </script>
	</head>
	<body>
		<input type="text" id="txt" name="txt" />
		<input type="button" id="tombol" value="TOMBOL" />
		<ul id="tampil">
		</ul>
	</body>
	<script>
		$(document).ready(function(){
			$("#tombol").click(function(){
				$("#tampil").append("<li onclick='$(this).remove()'>" + $("#txt").val() + "</li>") ;
				$("#txt").val("") ;
			}) ;
		}) ;
	</script>
</html>