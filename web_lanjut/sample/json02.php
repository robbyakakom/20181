<script>
	var myJson = '[{"nim":"0001","nama":"Budi","umur":23}, {"nim":"0002","nama":"Banu","umur":22}, {"nim":"0003","nama":"Badi","umur":21}]' ;
	var objek = JSON.parse(myJson) ;
	for(x in objek){
			document.write("NIM : " + objek[x].nim + "<br/>") ;
			document.write("Nama : " + objek[x].nama + "<hr/>") ;
	}

</script>