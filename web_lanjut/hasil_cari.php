<?php
$konek = mysqli_connect("localhost","root","","akdm") ;
$nim = isset($_GET["nim"]) ? $_GET["nim"] : ''  ;

$sql = "select * from mahasiswa where nim like '%{$nim}%'" ;

$query = mysqli_query($konek, $sql) ;
?>
<table border="1" cellspacing="0" cellpadding="10">
<?php
while($row = mysqli_fetch_assoc($query)){
	?>
		<tr>
			<td><?php echo $row['nim'] ?></td>
			<td><?php echo $row['nama'] ?></td>
		</tr>
	<?php
}
?>
</table>

