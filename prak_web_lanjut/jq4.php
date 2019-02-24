<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<script src="jquery/jquery-3.3.1.min.js"> </script>
	</head>
	<body>
		<form>
			Nama <br/> 
			<input type="text" id="nama" name="nama" /> </br>
			Alamat <br/> 
			<textarea id="alamat" name="alamat"></textarea> <br/>
			<input type="button" id="tambah" value="TAMBAHKAN" />
		</form>
		<hr/>
		<table border="1" cellpadding="5" cellspacing="0">
			<caption>DATA PENDAFTAR</caption>
			<thead>
				<tr>
					<td>NAMA</td><td>ALAMAT</td><td>OPERASI</td>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">Jumlah Data</td>
					<td id="jumlah">0</td>
				</tr>
			</tfoot>
		</table>
	</body>
	<script>
		$(document).ready(function(){
			var jumlah = 0 ;
			
			$("#tambah").click(function(){
				var nama ;
				var alamat ;
				
				nama = $("#nama").val() ;
				alamat = $("#alamat").val() ;
				
				var baris = "" ;
				baris = baris + "<tr>" ;
				baris = baris + "<td>" + nama + "</td>" ;
				baris = baris + "<td>" + alamat + "</td>" ;
				baris = baris + "<td> <input class='hapus' type='button' value='HAPUS' /> </td> ";
				//baris = baris + "<td> <input class='hapus' type='button' value='HAPUS' onclick='$(this).parent().parent().remove()'/> </td>" ;
				baris = baris + "</tr>" ;
				
				$("tbody").append(baris) ;
				
				jumlah = parseInt($("#jumlah").text()) + 1 ;
				$("#jumlah").text(jumlah) ;
				
				$("#nama").val("") ;
				$("#alamat").val("") ;
				
				$(".hapus").click(function(){
					$(this).parent().parent().remove() ;
					jumlah = parseInt($("#jumlah").text()) - 1 ;
					$("#jumlah").text(jumlah) ;
				}) ;
			}) ;
		}) ;
	</script>
</html>

<!-- 
nim / nama
-->