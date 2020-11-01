<?php 
	session_start();

	require 'database.php';

	if (isset($_SESSION['user_id'])){
		/*$records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id = :id');*/
		$records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id = :id');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);


		$user = null;
		if (count($results) > 0) {
			$user = $results;

		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
				body{
					background-image: url('./img/fondo1.jpg');:
					-webkit-background-size: cover;
					background-size: cover;
					background-attachment: fixed;
				}
			</style>

</head>



<body>
	<section class="headercont">
		<header>
		<div class="titulo">
		<img src="./img/logoP.png" alt="logo">

		</div>
		</header>
	</section>
		<div class="contenedor2">
		<!--<form action="" class="form"> --><!---este provoca un error-->

		<form action="login.php" class="form2" method="POST">

			<label for="evt" class="form-label2">Evento que desea reservar</label>
			<select type="text" name="eventos" class="form-imput"> 
			<option>Boda</option>
			<option>XV años</option>
			<option>Cumpleaños infantiles</option>
			<option>Cumpleaños adultos</option>
			<option>Reuniones</option>
			<option>Otros</option>
<br>
			<label for="email" class="form-label2">Electronico:</label>
			<input type="text" name="email" placeholder="ejemplo@mail.com">
			<label for="pass" class="form-label2">Contraseña:</label>
			<input type="password" name="password" placeholder="ejemplo123">
			<input type="submit" value="Reservar Ahora">



		</form>


		

			
		<!--<footer>
			<?php if(!empty($user)): ?>
					<br>Bienvenido. <?= $user['email']; ?>
					<br> Para salir da clic en 
					<a href='logout.php' style="color: red">Cerrar Sesión</a>	
					<?php else: ?>
			<?php endif ?>

		</footer>-->
	
</body>
</html>