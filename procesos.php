<?php
include("class/sql.php");
include("class/contactos.php");
$t = isset($_REQUEST["t"])?$_REQUEST["t"]:"";

if($t == 1)
{
	$id = isset($_POST["id"])? $_POST["id"]: "";
	$contacto = isset($_POST["contacto"])? $_POST["contacto"]: "";
	$puesto = isset($_POST["puesto"])? $_POST["puesto"]: "";
	$empresa = isset($_POST["empresa"])? $_POST["empresa"]: "";
	$tipo = isset($_POST["tipo"])? $_POST["tipo"]: "";
	$prioridad = isset($_POST["prioridad"])? $_POST["prioridad"]: "";
	$telefono = isset($_POST["telefono"])? $_POST["telefono"]: "";
	$correo = isset($_POST["correo"])? $_POST["correo"]: "";
	$nota = isset($_POST["nota"])? $_POST["nota"]: "";
	$foto = isset($_POST["foto"])? $_POST["foto"]: "";

	$dir = "foto/";
	$r = rand();

	if(isset($_FILES["foto"]))
	{
		if($_FILES["foto"]["error"] == 0)
		{
			$extn = explode(".", strtolower($_FILES["foto"]["name"]));
			$target_file = "foto/" . rand() . date("jmy"). "." . end($extn);
			$filetype = pathinfo($target_file, PATHINFO_EXTENSION);

			if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file))
			{
				$c =new  contactos();
				$c->crear($id, $contacto, $puesto, $empresa, $tipo, $prioridad, $telefono, $correo, $nota, $target_file);
			}
		}
	}
 echo "ok";
}
else if($t == 2)
{
	$c =new contactos();
	echo $c->mostrar();
}
else if($t==3)
{
	$id = isset($_GET["id"])?$_GET["id"]: "";
	$c =new contactos();

	echo $c->modificarPlantilla($id); 
}

elseif ($t ==4) 
{
	$id = isset($_POST["id"])? $_POST["id"]: "";
	$contacto = isset($_POST["contacto"])? $_POST["contacto"]: "";
	$puesto = isset($_POST["puesto"])? $_POST["puesto"]: "";
	$empresa = isset($_POST["empresa"])? $_POST["empresa"]: "";
	$tipo = isset($_POST["tipo"])? $_POST["tipo"]: "";
	$prioridad = isset($_POST["prioridad"])? $_POST["prioridad"]: "";
	$telefono = isset($_POST["telefono"])? $_POST["telefono"]: "";
	$correo = isset($_POST["correo"])? $_POST["correo"]: "";
	$nota = isset($_POST["nota"])? $_POST["nota"]: "";
	$foto = isset($_POST["foto"])? $_POST["foto"]: "";

	$dir = "foto/";
	$r = rand();

	if(isset($_FILES["foto"]))
	{
		//echo "entrada2";

		if($_FILES["foto"]["error"] == 0)
		{
			$extn = explode(".", strtolower($_FILES["foto"]["name"]));
			$target_file = "foto/" . rand() . date("jmy"). "." . end($extn);
			$filetype = pathinfo($target_file, PATHINFO_EXTENSION);

			if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file))
			{
				$c =new  contactos();
				$c->modificar($id, $contacto, $puesto, $empresa, $tipo, $prioridad, $telefono, $correo, $nota, $target_file);
			}
		}
	}
 echo "ok";
}
else if($t == 5)
{
	$c= new contactos();
	echo $c->mostrar2();
}
else if($t == 6)
{
	$id = isset($_GET["id"])?$_GET["id"]:"";

	$c = new contactos();
	echo $c->eliminar($id);
	echo $c->mostrar2();
}

else if($t == 7)
{
	$c = new contactos();
	echo $c->mostrar3();
}

else if($t == 8)
{
	$c =new contactos();
	echo $c->mostrar4();
}



?>
