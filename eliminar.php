<?php
include "seguridad.php";

//echo "<br>muy bien <br>";

//echo "<a href='salir.php'>salir</a>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
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
		<?php include("menu.php");
		?>
		<div id="tabla"></div>
	</div>

	<div class="modal" id="eliminarModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Eliminar</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Esta seguro que desea eliminarlo?</p>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
					<button type="button" class="btn btn-primary" onclick="eliminarDatoOk()">Si</button>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.6.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
		var id=0;

		function load()
		{
			var url = "procesos.php?t=5&r=" + Math.random();
			$.get(url, function (result)
			{
				$("#tabla").html(result);
			});
		}

		$(document).ready(function(){
			load();

			$("#btn3").attr("disabled",true);
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
			location.href="modificar.php";
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


		function eliminarItem(id1)
		{
			id= id1;
			$("#eliminarModal").modal("show");
		}
		function eliminarDatoOk()
		{
			var url = "procesos.php?t=6&id=" + id + "&r=" +  Math.random();
			$.get(url, function (result)
			{
				$("#eliminarModal").modal("hide");
				$("#tabla").html(result);
			});
		}
	</script>
</body>
</html>