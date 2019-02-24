<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<script src="jquery/jquery-3.3.1.min.js"></script>
	</head>
	<body>
		<input type="button" id="ubah" value="UBAH"/>
	</body>
	<script>
		$(document).ready(function(){
			$(".ubah").click(function(){
				$("body").css("background","blue") ;
			} )
		}) ;
	</script>
</html>