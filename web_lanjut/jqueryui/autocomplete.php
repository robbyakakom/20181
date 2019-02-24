<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<link href = "jquery-ui-1.12.1.custom/jquery-ui.css" rel = "stylesheet">
		<script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
		<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
		<script>
		$(document).ready(function() {
			$("#jur").autocomplete({
				source: ['TI','SI','KA','MI','TK'],
			}) ;
			$("#data").accordion({
				  animate: 500
				});
		})
		</script>
	</head>
	<body>
		Jurusan : <input id="jur" />
		<select>
			<option> data </option>
		</select>
		<div id="data">
			<h3>Judul 1</h3>
			<div>
				isi data judul 1
			</div>
			<h3>Judul 2</h3>
			<div>
				isi data judul 2
			</div>
		</div>
	</body>
</html>