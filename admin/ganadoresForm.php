<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ganadores</title>
</head>
<body>
	<style>
		.result {
    font-size: 11px;
    font-family: Arial;
}
	</style>
	<form action="ajax/subirGanadoresExcel.php" method="post"  enctype="multipart/form-data">
		
		Select file to upload:
    <input type="file" name="archivo" id="archivo">
    <input type="submit" value="Upload" name="submit">
	</form>
<p class="result"></p>
	<p>
		<button id="enviar">Enviar Masivo</button>
	</p>

<script src="assets/js/jquery-2.1.1.min.js"></script>
<script>
$( document ).ready(function() {	
	
	$( "#enviar" ).click(function() {
		$(".result").html("<img src='assets/img/ajax-loader.gif'>");
	  $.post( "ajax/envia-mail-masivo.php", function( data ) {
		  $( ".result" ).html( data );
		});
	});

});

</script>	
</body>
</html>