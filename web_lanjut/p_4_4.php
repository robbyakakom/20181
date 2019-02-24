<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		
	</head>
	<body>
		<img id="gbr" src="images/222.JPG" height="400" />
	</body>
	<script>
			
			var gbr = ['images/222.JPG','images/581.JPG','images/A.JPG'] ;
			var i = 0 ;
			var x = 0 ;
			setInterval(function(){ 
				x = i % 3 ;
				document.getElementById('gbr').src = gbr[x] ;
				i = i + 1;
			}, 1000);
			
	</script>
</html>