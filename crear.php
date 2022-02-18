<?php
//establezco la zona horaria por defecto
date_default_timezone_set('America/Lima');

//si el formulario ha sido enviado procedo a ingresar contenido en la bbdd
if(isset($_POST['sw']) == 1){

	//conexion a bbdd
	$link = mysqli_connect('localhost', 'root', '', 'demo_crud');

	//Consulta de insercion. Se reciben los valores de los inputs del formulario enviados por POST
	$query = "INSERT INTO users (id, name, email, phone, created) VALUES (0, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['created']."' )";
	if(mysqli_query($link, $query)){ // si la consulta se ejecuto con exito muestro mensaje y redirecciono a dos.php
		echo "La informacion se guardo con exito";
		header('Location: dos.php');
	}else{ //si hubo error muestro mensaje de error
		echo "Ocurrio un error al intentar guardar";
	}

	//cierro conexion a bbdd
	mysqli_close($link);
}
?>

	<!DOCTYPE html>
	<html lang="Es-es" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.ico">   <!--ctm acuerdate de modificar este icono-->
		<meta name="author" content="codepixer">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>Los Pollos Hermanos</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			<!-- header -->
			  <header id="header" id="home"> <!--Aquí empieza el header - Menú-->
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logos.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container"> <!--Menú-->
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Inicio</a></li>
				          <li><a href="dos.php">Menú</a></li>

				      </nav><!--Menú-->		    		
			    	</div>
			    </div>
			  </header>
			 <!-- header -->

			<!-- Foto de portada -->
			<section class="banner-area relative" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-8 col-md-12">
							<h3>
							</h3>
							<p class="text-white">
								
							</p>
						</div>												
					</div>
				</div>
			</section>
			<!-- Foto de portada -->
			<!-- Formulario de Crear-->
				<section class="contact-area" id="contact">
				<div class="container-fluid">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3>Nueva receta</h3>
							<form action="crear.php" method="post">

							<div class="lg-8 mt-10">
								<input type="text" name="name" placeholder="Receta" onfocus="this.placeholder = ''" onblur="this.placeholder = '$'" required class="single-input">
							</div>
							<div class="lg-8 mt-10">
								<input type="text" name="email" placeholder="Descripción" onfocus="this.placeholder = ''" onblur="this.placeholder = '$'" required class="single-input">
							</div>
		
							<div class="lg-8 mt-10">
								<input type="number" name="phone" placeholder="Precio" onfocus="this.placeholder = ''" onblur="this.placeholder = '$'" required class="single-input">
							</div>
		
							<input class="genric-btn primary radius" type="submit" name="guardar" value="Guardar" /><br /><br />
							<a class="btn" href="dos.php"><< Volver</a>
							<input type="hidden" name="created" value="<?php echo date("Y-m-d H:i:s", time()); ?>" />
							<input type="hidden" name="sw" value="1" />
						</form>
					</div>
				</div>
				</div>
				</div>
			</div>
				</section>	
			<!-- Formulario de Crear-->
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2  col-md-6 col-sm-12">
							<div class="single-footer-widget">
								<h4 class="text-white"></h4>
								<p>
								</p>
							</div>
						</div>
						<div class="col-lg-8  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h3 class="text-center text-white">
									Angel Coronado
								</h3>
								<h3 class="text-center text-white">
									Orlando Muñoz
								</h3>
								<h3 class="text-center text-white">
									Maria Lacave
								</h3>
							</div>
						</div>						
						<div class="col-lg-2  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white"></h4>
								<p></p>
								<div class="d-flex flex-row" id="mc_embed_signup">
								</div>
							</div>
						</div>						
					</div>
					<div style="margin: 25px;">
						<h3 class="text-center text-white">
							UNIVERSIDAD NACIONAL EXPERIMENTAL POLITECNICA DE LA FUERZA ARMADA NACIONAL BOLIVARIANA
						</h3>
					</div>
					<div class="text-center">
						<a><img src="img/unefa.png"></a>
					</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/mail-script.js"></script>				
			<script src="js/main.js"></script>	
		</body>
	</html>