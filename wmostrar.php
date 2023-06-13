
<?php
include "seguridad.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.foto{
			max-width: 52px;
			border-radius: 50%;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php 
		include("menu.php");
		?>
		<div id="tabla"></div>
		
	</div>
	<div id="work"></div>

	
	
	<script src="js/jquery-3.6.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
		$(document).ready(function (){
			$("#btn4").attr("disabled", true);
		});
		function salir()
		{
			location.href="salir.php";
		}
		function crear()
		{
			location.href="crear.php";
		}
		function modificar()
		{
			location.href="modificar.php"
		}
		function eliminar()
		{
			location.href="eliminar.php";
		}
		function excel()
		{
			location.href="excel.php";
		}
		function pdf()
		{
			location.href="pdf.php";
		}
		function wmostrar()
		{
			location.href="wmostrar.php";
		}

		
		(function (){
			load();
		})();

		function load()
		{
			var url = "procesos.php?t=8&r=" + Math.random();
			$.get(url, function (result)
			{
				$("#tabla").html(result);
			});
		}
		
		function generaword(id)
		{
			location.href="word.php" + "?id=" + id;

		}
		
		

			
	</script>
		
</body>
</html> 