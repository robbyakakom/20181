<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
	</head>
	<body>
		<img id="gbr" src="images/222.JPG" height="400" />
		<br/>
		<input type="button" value="Gambar 1" onclick="document.getElementById('gbr').src = 'images/222.JPG'" />
		<input type="button" value="Gambar 2" onclick="document.getElementById('gbr').src = 'images/581.JPG'" />
		<input type="button" value="Gambar 3" onclick="document.getElementById('gbr').src = 'images/A.JPG'"/>
		<hr/>
		<input type="button" value="ZOOM IN" onclick="document.getElementById('gbr').height = (document.getElementById('gbr').height - 25)">
		
		<input type="button" value="ZOOM OUT" onclick="document.getElementById('gbr').height = (document.getElementById('gbr').height + 25)">
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