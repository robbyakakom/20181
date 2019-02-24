<!DOCTYPE html>
<html>
	<head>
		<title>APP WEB</title>
		<link href = "jquery-ui-1.12.1.custom/jquery-ui.css"
   rel = "stylesheet">
		<script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
		<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
		<script>
         $(function() {
            $( "#dialog-1" ).dialog({
               autoOpen: false,  
			   width: 600,
			   height: 500,
			   title: "Kotak Dialog",
			   modal: true,
			   buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); } } ]
            });
            $( "#opener" ).click(function() {
               $( "#dialog-1" ).dialog( "open" );
            });
			$( "#automplete-1" ).autocomplete({
               source: [
			    {'label':'Sistem Informasi','value':'SI'},
			    {'label':'Teknik Informatika','value':'TI'},
			   ],
            });
         });
      </script>
	</head>
	<body>
		<div id = "dialog-1" title = "Kotak Dialog">
			This my first jQuery UI Dialog!
			<hr/>
			Jurusan : <input id = "automplete-1">
		</div>
		<button id = "opener">Open Dialog</button>
	</body>
</html>