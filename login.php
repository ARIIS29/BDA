<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-12"></div>
			<div class="col-sm-4 col-12">
				<div class="card mt-3">
					<div class="card-body">
						<div class="row">
							<div class="col-12 text-center">
								<img src="img/login.png" style="max-width: 100px;">
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<form action="valida.php" method="post">
									<div class="mt-3">
										<label for="usuario"
										class="form-label"> Usuario:</label>
										<input type="text" class="form-control" 
										id="usuario" placeholder="Usuario Buap" 
										name="usuario" required>	
									</div>
									<div class="mt-3">
										<label for="pass"
										class="form-label">Password:</label>
										<input type="Password" class="form-control" id="pass" placeholder="Password BUAP"
										name ="pass" required>
									</div>
									<div class="mt-3">
										<button type="submit" class="btn btn-primary form-control">Enviar</button>	
									</div>
								</form>
							</div>
						</div>
					</div>
			</div>
			</div>
			<div class="col-sm-4 col-12"></div>
		</div>
	</div>
	<script src="js/jquery-3.6.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>