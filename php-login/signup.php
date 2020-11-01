<?php 
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {

	$sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email',$_POST['email']);
	/* con esto se cifran las contraseñas para no ser visible a cualquiera que entre a la bd--------------------------*/
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt->bindParam(':password', $password);

	if ($stmt->execute()){
		$message = '<span style="color:red;">Registro realizado con exito</span>'; 

	} else {
		$message = '<span style="color:red;">No se ha podido registrar</span>'; 
	}
	
}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SignUp</title>

	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
		
		body{
			/*background-image: url('./img/fondo3.jpg');: */
			background-color: black;
			-webkit-background-size: cover;
			background-size: cover;
			background-attachment: fixed;
		}

	</style>
</head>
<body>


<?php require 'partials/header.php' ?>

	<?php if(!empty($message)):?>

	<p><?= $message ?></p>

<?php endif; ?>
<img src="./img/logoP.png" alt="logo">

	<!--<h1>Registrarse</h1>
	<span> o <a href="login.php">Iniciar Sesión</a></span>

	<form action="signup.php" method="post">
		<input type="text" name="email" placeholder="Ingresa tu Correo Electronico">
		<input type="password" name="password" placeholder="Ingrese su contraseña">

		<input type="submit" value="Continuar">
	</form> -->



	<div class="contenedor">
		<!--<form action="" class="form"> --><!---este provoca un error-->
		<div class="form-header">
			<h1 class="form-title" style="color: #fff">Registrarse</h1>
			<!--<h1 class="form-title">C<span>ontacto</span></h1> -->
			</div>

		<form action="signup.php" class="form" method="POST">
<br>
			<label for="email" class="form-label">Correo Electronico:</label>
			<input type="text" name="email" placeholder="ejemplo@mail.com">
			<label for="pass" class="form-label">Contraseña:</label>
			<input type="password" name="password" placeholder="ejemplo123">
			<input type="submit" value="Registrase">
		
		</form>
			<br>
			<footer><span style="color: #fff"> Si ya tiene una cuenta inicie sesion <a href="login.php" style="color: red">aqui</a></span></footer>
	


		</form>




</body>
</html>