<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- Local CSS  -->
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/login.css">
	<!-- Font Awesome Icons-->
	<script src="https://kit.fontawesome.com/7a6221e2a1.js" crossorigin="anonymous"></script>
</head>
<body class="linear-bg">
	<div class="container-fluid">
	<div class="container-fluid"> 
	<header>
		<!-- init of header -->
		<!-- init of nav bar -->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid ">
					<h1 class="navbar-brand mb-0 text-white">INASCA</h1>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-center text-white" id="navbarNavAltMarkup">
						<div class="navbar-nav me-auto mb-2 mb-lg-0">
							<a class="nav-link" href="index.html">Inicio</a>
							<a class="nav-link" href="contact-us.html">Contactos</a>
						</div>
						<a class="nav-link active" title="Acceder" href="login.php" aria-current="page"><i class="fas fa-sign-in-alt"></i></a>
					</div>
				</div>
			</nav>
		<!-- end of nav bar -->
		<!-- end of header -->
	</header>
	</div>
		<!-- init of login form -->
		<div class="container-login d-flex align-items-center justify-content-center">
			<form class="dummy p-5 clearfix text-center" method="POST" action="login.php">
				<h2 class="text-primary mb-3">Iniciar Sesión</h2>
				<i class="fas fa-user-circle"></i>
				<div class="my-3">
					<label for="user" class="form-label">Usuario</label>
					<input type="text" name="user" id="user" class="form-control bg-transparent">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Contraseña</label>						
					<input type="password" name="password" id="password" class="form-control bg-transparent">
				</div>
				<input type="submit" name="" class="btn btn-primary float-end">
			</form>
		</div>
		<!-- end of login form -->
	</div>


	<!-- Optional JavaScript -->
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>