<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
	</head>
	<body id="isi">
	
	</body>
</html>
		<script>
			// array
			/*var nama = ["Budi", "Juki", "Fulan"] ;
			document.write(nama[1]) ;
			exit;*/
			//objek di javascript
			var mahasiswa = {
								nim : "0999",
								nama : "Marjuki",
								jurusan : "Sistem Informasi",
								angkatan : 2017
							} ;
			var dataJson = JSON.stringify(mahasiswa) ;
		
			document.write(dataJson) ;
			/*
			document.getElementById("isi").innerHTML = "NIM " + mahasiswa["nim"] + "<br/> " + "Nama " + mahasiswa["nama"] + "<br/>" + "Jurusan " + mahasiswa["jurusan"] + "<br/>" + "Lulus " + mahasiswa.lulus() + "<br/";
			*/
			
			/*
			var key ;
			for(key in mahasiswa){
				document.write(key + " " + mahasiswa[key] + "<br/>") ;
			}
			*?
		</script>
