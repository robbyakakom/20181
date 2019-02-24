<script>
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var myJson = this.responseText; ;
			var objek = JSON.parse(myJson) ;
			for(x in objek){
			document.write("NIM : " + objek[x].nim + "<br/>") ;
			document.write("Nama : " + objek[x].nama + "<hr/>") ;
			}		  
		}
	  };
	  xhttp.open("GET", "mahasiswa.json", true);
	  xhttp.send();
</script>