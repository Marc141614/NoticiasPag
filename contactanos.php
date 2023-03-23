<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device=width, initial-scale=1.0">
		<title>The News</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="logo-wrapper d-flex align-items-center">
				<h1>
					<a href="inicio.php">
						The News
					</a>
				</h1>
			</div>
		</div>
		<div class="container-fluid menu">
				<div class="container">
					<div class="d-flex menu-items">
						<div class="active">
							<a href="inicio.php">Inicio</a>
						</div>
						<div>
							<a href="category.php">Deportes</a>
						</div>
						<div>
							<a href="clima.php">Clima</a>
						</div>
						
						<div>
							<a href="membresia.php">Membresía</a>
						</div>
						<div>
							<a href="index.php">Cerrar Sesión</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container main-news">
			</div>
			<script type="text/javascript">
			window.onscroll = function(){
				setSticky();
			}
			navbar = document.getElementsByClassName('menu')[0];
			var sticky = navbar.offsetTop;
			function setSticky(){
				if(window.pageYOffset >= sticky){
					navbar.classList.add('sticky');
				}else{
					navbar.classList.remove('sticky');
				}
			}
		</script>