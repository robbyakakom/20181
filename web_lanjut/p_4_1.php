<!DOCTYPE html>
<html lang="en">
	<head>
		<title>APP WEB</title>
	</head>
	<body>
		<h1 id="judul" onclick="ganti()">Judul Artikel</h1>
		<p>
			paragraph 1 paragraph 1 paragraph 1 paragraph 1 paragraph 1 paragraph 1 paragraph 1 paragraph 1 paragraph 1 paragraph 1 
		</p>
		<a id="link_read" href="javascript:void(0)" onclick="tampil()">READ MORE...</a>
		<div id="detail" style="display:none">
			<p>
				paragraph 2 paragraph 2 paragraph 2 paragraph 2 paragraph 2 paragraph 2 paragraph 2 paragraph 2 paragraph 2 paragraph 2 paragraph 2 paragraph 2 paragraph 2 
			</p>
			<p>
				paragraph 3 paragraph 3 paragraph 3 paragraph 3 paragraph 3 paragraph 3 paragraph 3 paragraph 3 paragraph 3 paragraph 3 paragraph 3 
			</p>
		</div>
		<script>
			function ganti() {
				document.getElementById("judul").innerHTML = "INI JUDUL BARU" ;
			}
			
			function tampil() {
				//mengambil objek
				var link = document.getElementById("link_read") ;
				var detail = document.getElementById("detail") ;
				
				link.style.display = "none" ;
				detail.style.display = "block" ;
				
			}
		</script>
	</body>
</html>