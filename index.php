<?php 

$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location:/');
}else{


	if(!empty($_POST))
	{
		if(empty($_POST['usuario']) || empty($_POST['clave']))
		{
			$alert = 'Ingrese su usuario y su clave';
		}else{
			require_once "conexion.php";

			$user= mysqli_real_escape_string($conection,$_POST['usuario']);
			$pass=  md5(mysqli_real_escape_string($conection,$_POST['clave']));

			$query=mysqli_query($conection,"SELECT registro_sesion.Id_usuario, registro_sesion.nombre, registro_sesion.correo, registro_sesion.usuario, rol.rol FROM `registro_sesion`, rol WHERE usuario ='$user' and clave = '$pass'");
			$result=mysqli_num_rows($query);

			if($result > 0)
			{
				$data=mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUser'] = $data['Id_usuario'];
				$_SESSION['nombre'] = $data['nombre'];
				$_SESSION['email'] = $data['correo'];
				$_SESSION['user'] = $data['usuario'];
				$_SESSION['rol'] = $data['rol'];

				
				header('location: src/pages/tablero.php');
			}else{
				$alert = 'El usuario o la clave son incorrectos';
				session_destroy();
			}
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <section class="container" id="container">
		<form action="" method="post" class="formulario">
			<h3>Iniciar Sesion</h3>
			
			<img src="img/ImgLogin.jpeg" alt="Login">
			<label for="">Usuario:</label>
			<input type="text" name="usuario" placeholder="Usuario">
			<label for="">Contraseña:</label>
			<input type="password" name="clave" placeholder="Contraseña">
			<div class="alert"><?php echo isset($alert) ? $alert : '';  ?></div>
			<input class="btnIngresar" type="submit" value="Ingresar">
			<a href="">Recuperar contraseña</a>

		</form>
	</section>
</body>
</html>