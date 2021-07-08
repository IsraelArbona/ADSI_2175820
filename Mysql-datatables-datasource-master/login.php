<?php 
  require_once 'conexion/conexion.php';

  if (!empty($_POST)){
  	$db = new db_conexion();

  	$usuario = $_POST['usuario'];

  	$sql = "select login, clave from usuarios where login = '$usuario'";

  	$query_exec = mysqli_query($db->conectar(),$sql) 
  	or die('error en la consulta');

  	$row = mysqli_fetch_array($query_exec);

  	if ($row) {
      if ($_POST['contrasena'] == $row['clave']){
      	header('location:inicio.php');
      } else {
      	print("
      		<script>
                alert('codigo javascript');
      		</script>
      		"
      	);
      }
  	}

  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formularios</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<form action="login.php" method="POST">
		  <div class="form-group">
		    <label for="nom">Usuario</label>
		    <input type="text" class="form-control" id="nom" name="usuario">
		  </div>
		  <div class="form-group">
		    <label for="cont">Contraseña</label>
		    <input type="password" class="form-control" id="cont" name="contrasena">
		  </div>
		  
		  <button type="submit" class="btn btn-primary" name="enviar">Submit</button>
		</form>
	</div>
</div>
</body>
</html>