<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<script src="jquery-3.3.1.min.js"></script>
	</head>
	<body>
		<h1 style="position:absolute; left:20px; top: 300px;">Judul</h1>
		<p>
			ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph 
			<input id="tampilkan" type="button" value="Read More..." />
		</p>
		<div id="detail" style="display:none;" >
		<p>
			ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph 
		</p>
		<p>
			ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph 
		</p>
		<p>
			ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph 
		</p>
		<p>
			ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph ini paragraph 
		</p>
		</div>
		<input type="button" id="ganti" value="GANTI WARNA" />
		<input type="button" id="animasi" value="ANIMASI" />
	</body>
	<script>
		$(document).ready(function(){
			$("#ganti").click(function() {
				$("body").css("background-color","blue") ;
			}) ;
			
			$("#tampilkan").click(function(){
				$("#detail").show("slow", function() {
					$("body").css("background-color","blue") ;
				}) ;
				$(this).hide() ;
			} ) ;
			
			$("#animasi").click(function() {
				$("h1").animate({
					left: 200 
				})
			}) ;
		}) ;
	</script>
</html>