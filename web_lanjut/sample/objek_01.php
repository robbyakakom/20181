<script>
	var mahasiswa = { 
						nim:"001",
						nama:"budi",
						umur: 22,
						lulus: function(){
							return (this.umur + 2018) ; 
						}
					} ;
	document.write("NIM " + mahasiswa.nim + "<br/>") ;
	document.write("Nama " + mahasiswa.nama + "<br/>") ;
	document.write("Umur " + mahasiswa.umur + "<br/>") ;
	document.write("Lulus " + mahasiswa.lulus() + "<br/>") ;
</script>