<?php 

	session_start();

	if(isset($_SESSION['user_id'])){
		header('Location: /php-login');
	}

	require 'database.php';

	if (!empty($_POST['email']) && !empty($_POST['password'])){
		$records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email = :email');
		$records->bindParam(':email', $_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$message = '';
		if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
			$_SESSION['user_id'] = $results['id'];
			header('Location: /php-login/contenido.php');
		} else {
			$message = '<span style="color:red;">Datos incorrectos o inexistentes</span>'; 
		}

	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

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
	

	<?php if (!empty($message)) : ?>

		<p><?= $message ?></p>

	<?php endif; ?> 
<img src="./img/logoP.png" alt="logo">

	<div class="contenedor">
		<!--<form action="" class="form"> --><!---este provoca un error-->
		<div class="form-header">
			<h1 class="form-title" style="color: #fff">Iniciar sesión</h1>
			<!--<h1 class="form-title">C<span>ontacto</span></h1> -->
			</div>

		<form action="login.php" class="form" method="POST">
			<label for="email" class="form-label">Correo Electronico:</label>
			<input type="text" name="email" placeholder="ejemplo@mail.com">
			<label for="pass" class="form-label">Contraseña:</label>
			<input type="password" name="password" placeholder="ejemplo123">
			<input type="submit" value="Iniciar Sesión">
		</form>
			<br>
			<footer><span style="color: #fff"> Si no tiene cuenta cree una <a href="signup.php" style="color: red">aqui</a></span></footer>
	


		</form>
	
</body>
</html>