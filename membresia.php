
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device=width, initial-scale=1.0">
		<title>Las noticias del mundo</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	<body>
		<div class="container">
			<div class="logo-wrapper d-flex align-items-center">
				<h1>
					<a href="inicio.php">
						NOTICIAS DEL MUNDO
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
			<div>
                <div class="contenedor">
					<div class="tabla">
						<h2>Básico</h2>
						<img src="png/1.png" alt="">
						<h3>100 <sup>$</sup></h3>
						<p>Contrata este beneficio para recibir en tiempo real noticias de última hora x 3 meses</p>
						<a href="pago.php" class="boton">Paga ahora</a>
					</div>
					<div class="tabla hover">
						<h2>Estandar</h2>
						<img src="png/2.png" alt="">
						<h3>200 <sup>$</sup></h3>
						<p>Contrata este beneficio para ver noticieros en vivo y puedas compartirlo con tus familiares x 6 meses</p>
						<a href="pago2.php" class="boton">Paga ahora</a>
					</div>
					<div class="tabla">
						<h2>Premium</h2>
						<img src="png/3.png" alt="">
						<h3>300 <sup>$</sup></h3>
						<p>Contrata este beneficio para disfrutar los beneficios completos x 1 año </p>
						<a href="pago3.php" class="boton">Paga ahora</a>
					</div>
				</div>
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