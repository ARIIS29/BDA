<?php
?>
<div class="row text-center">
	<div class="col-sm-10">
		<div class="btn-group">
			<button id="btn1" type="button" class="btn btn-primary" onclick="crear()"> Crear usuario </button>	
			<button	id="btn2" type="button" class="btn btn-primary" onclick="modificar()"> Modificar usuario</button>	
			<button	id="btn3" type="button" class="btn btn-primary" onclick="eliminar()"> Eliminar usuario	</button>	
			<button	id="btn4" type="button" class="btn btn-primary" onclick="wmostrar()"> Generar word</button>		
		</div>

		<button	 class="btn btn-outline-danger" onclick="pdf()"><img src="img/icono-PDF.png" width=	"30px">	</button>
		<button class="btn btn-outline-success" onclick="excel()"><img src="img/EXCEL-ICON.png" width="30px"></button>
		
	</div>
	<div class="col-sm-2 text-end">
		<button type="button" class="btn btn-dark" onclick="salir()">salir</button>
	</div>
</div>