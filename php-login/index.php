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
	<title>Bienvenido al Sistema de Reservaciones</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
		
		 a:link, a:visited, a:active {
            text-decoration:none;
        }
		body{
			background-image: url('./img/fondo3.jpg');: 
			-webkit-background-size: cover;
			background-size: cover;
			background-attachment: fixed;
		}

	</style>



</head>
<body>



			<?php if(!empty($user)): ?>
					<br>Bienvenido. <?= $user['email']; ?>
					<br>Has iniciado Sesión correctamente
					<a href='logout.php'>Cerrar Sesión</a>	
					<?php else: ?>
<br>
<br>

					<img src="./img/logoP.png" alt="logo">

				<!--<section class="intro">
					<div>
						
						<p class="titulo"> </p>
						<p class="desc">Les damos la bienvenida a nuestra página de reservaciones.
						Aqui podrá reservar el salón para los diferentes eventos que usted quiera organizar, tales como, Bodas,XV años, Cumpleaños y muchos más.</p>
					</div>
				</section>-->
				
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<section class="login">

					<h4> Para continuar y ver todo el contenido registrese o inicie sesión</h4>
					<p>solo de clic en los enalaces de abajo.</p>

					<a href="login.php" style="color:#ffffff;">Iniciar Sesión  </a> | 
					<a href="signup.php" style="color: #00bb00">  Registrate</a>
				</section>

			<?php endif; ?>
	

</body>
</html>