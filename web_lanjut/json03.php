<script>
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		var mhsJson = this.responseText; 
		var mahasiswa = JSON.parse(mhsJson);
		var tbl = "" ;
		tbl = tbl + "<table border='1'>" ;
		tbl = tbl + "<tr> <th>NIM</th> <th>NAMA</th> </tr>" ;
		for(mhs in mahasiswa){
			for(dataMhs in mahasiswa[mhs]){
				tbl = tbl + "<tr>" ;	
				tbl = tbl + "<td>" + mahasiswa[mhs][dataMhs].nim + "</td>" ;
				tbl = tbl + "<td>" + mahasiswa[mhs][dataMhs].nama + "</td>" ;
				tbl = tbl + "<tr>" ;				
			};
		}
		tbl = tbl + "</table>" ;
		document.write(tbl) ;
	}
	};
	xhttp.open("GET", "dataJson.json", true);
	xhttp.send();
</script>