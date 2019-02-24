<script>
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "mahasiswa.json", false);
	xhttp.send();
	var myJson = xhttp.responseText; ;
	var objek = JSON.parse(myJson) ;
	document.write("<table border='1'>") ;
	document.write("<tr>") ;
	document.write("<th>NIM</th><th>Nama</th>") ;
	document.write("</tr>") ;
	for(x in objek){
		document.write("<tr>") ;
		document.write("<td>" + objek[x].nim + "</td>") ;
		document.write("<td>" + objek[x].nama + "</td>") ;
		document.write("</tr>") ;
	}
	document.write("</table>");
</script>