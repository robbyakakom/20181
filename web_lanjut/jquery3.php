<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<script src="jquery-3.3.1.min.js"></script>
	</head>
	<body>
		Nama <input type="text" name="nama" id="nama" />
		<hr/>
		<div> Data Nama : 
			<ul>
			
			</ul>
		</div>
	</body>
	<script>
		$(document).ready(function(){
			$("#nama").blur(function(){
				$("ul").append("<li>" + $(this).val() + "</li>") ;
				$(this).val("") ;
				
				$("li").click(function(){
					$(this).remove() ;
				} )
			}) ;
		} )
	</script>
</html>