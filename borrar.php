<?php 

//conexion a bbdd
$link = mysqli_connect('localhost', 'root', '', 'demo_crud');

//si el formulario fue enviado
if(isset($_POST['sw']) == 1){

	//cadena con la consulta de eliminacion segun el id de usuario
	$query = "DELETE FROM users WHERE id =".$_POST['id']; //No olvidar el WHERE en el DELETE!!

	if(mysqli_query($link, $query)){ //si la consulta devuelve un resultado
		header("Location: dos.php"); //redirecciono a dos.php
	}else{ //si hubo un error
		echo "Ocurrio un error al intentar eliminar el registro"; //mensaje de error
	}
}

//cierro conexion a bbdd
mysqli_close($link);
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


			<section class="contact-area" id="contact">
			<div class="container-fluid">
			<div class="container-fluid">
			<div class="row">
				<div class="title text-center">
					<div class="col-lg-12 col-md-8">
						<h1 class="mb-10">Eliminar receta</h1>
						<p>Esta seguro que quiere eliminar este registro permanentemente de la base de datos?</p>
								<form action="borrar.php" method="post">
								<input class="genric-btn warning radius" type="submit" name="eliminar" value="Eliminar" />
								<input type="hidden" name="sw" value="1" />
								<?php if(isset($_GET['id'])): ?>
								<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
								<?php endif; ?>
							</form><br />
							<a class="btn" href="dos.php"><< Volver</a>
						</div>
				</div>
			</div>
			</div>
			</div>
			</section>


	</div>
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
