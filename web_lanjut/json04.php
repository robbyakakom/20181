<script>
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		var mhsJson = this.responseText; 
		var objek = JSON.parse(mhsJson) ;
		for(key in objek){
			document.write(key + " = " + objek[key] + "<br/>") ;
		}
	}
	};
	xhttp.open("GET", "jsonObjek.json", true);
	xhttp.send();
</script>