<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device=width, initial-scale=1.0">
		<title>The News</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
     <link rel="stylesheet" href="css/product.css">
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
                        <input type="text" placeholder="Buscar" />
                        <div>
							<a href="index.php">Cerrar Sesión</a>
						</div>
						<!--<div>
							<a href="category.html">Politics</a>
						</div>
						<div>	
							<a href="category.html">Features</a>
						</div>
						<div>	
							<a href="category.html">Interviews</a>
						</div>-->
					</div>
				</div>
			</div>

			<div>
               
                    <section id="news-feed" class="container">
                 <!-- news home 3 -->
                 <div class="container main-news section">
              <div class="row">
                  <div class="left-col">
                      <article>
                          <h1>Catástrofes por el clima provocan 22 millones de desplazados, alerta la ONU</h1>
                          <p>Desarraigados, se vuelven más vulnerables a la violencia, el hambre y las enfermedades, de acuerdo con los expertos. Y, dado que el clima es cada vez más extremo en el mundo, se espera que el número de desplazados aumente a 143 millones a mediados de siglo.

                        </p>
                          <figure>
                            <img class="thumb mb-3" src="https://phantom-marca.unidadeditorial.es/e82def371e3d6f66ce5f6cdc1fa37311/resize/660/f/webp/assets/multimedia/imagenes/2021/08/21/16295122518369.jpg">
                             
                          </figure>
                      </article>
                  </div>
                  <div class="right-col">
                      <article>
                          <h2>Clima México hoy 15 de noviembre: prevén lluvias y heladas por frente frío</h2>
                          <figure>
                              <img class="thumb mb-3" src="https://cdn2.excelsior.com.mx/media/styles/image800x600/public/pictures/2022/11/14/2856168.jpg" />
                              
                          </figure>
                      </article>
                      <article>
                          <h2>Este lunes, el frente frío número 8 se extenderá sobre el Mar Caribe y ocasionará lluvias aisladas en Quintana Roo.</h2>
                          <figure>
                            <img class="thumb mb-3" src="https://phantom-marca.unidadeditorial.es/cab73edeca8c7b9c2d048c0752173f89/resize/660/f/webp/assets/multimedia/imagenes/2021/10/03/16332224230246.jpg" />
                              
                          </figure>
                      </article>
                  </div>
                </div>
                 </div>
               <!-- news 2 -->
               <div class="row">
                <div class="col">
                    <article>
                        <h2>Frente Frío 9 provocará el descenso de temperaturas en México</h2>
                        <figure>
                            <img class="thumb mb-3" src="https://img.asmedia.epimg.net/resizer/5RMI7PtY2RVZ9TUvMD3qDJl6DTc=/644x362/cloudfront-eu-central-1.images.arcpublishing.com/diarioas/ICLSLWI3KBA5NKL7M3QVY5Y3SI.webp" />
                            
                        </figure>
                    </article>
                </div>
                <div class="col">
                    <article>
                        <h2>Clima 10 de noviembre: Heladas y temperaturas inferiores a los 5 °C</h2>
                        <figure>
                            <img src="https://tvazteca.brightspotcdn.com/dims4/default/3b1d3a1/2147483647/strip/true/crop/1280x720+0+0/resize/1500x845!/format/jpg/quality/80/?url=https%3A%2F%2Ftvazteca.brightspotcdn.com%2F01%2F48%2Fe362434e4728abbb41846c15080e%2Fclima-10-de-noviembre-temperaturas.jpg" />
                           
                        </figure>
                    </article>
                </div>
              </div>
              
              <!-- news 4 -->
              <div class="row">   
                <div class="col">
                    <article>
                        <h2>El Servicio Meteorológico Nacional (SMN) anunció el pronóstico del clima en México.</h2>
                        <figure>
                            <img src="https://i.ytimg.com/vi/z_dZQuZQTQs/maxresdefault.jpg" />
                           
                        </figure>
                    </article>
                </div>
                <div class="col">
                    <article>
                        <h2>Las autoridades de diversas entidades han informado sobre las condiciones esperadas.</h2>
                        <figure>
                            <img src="https://services.meteored.com/img/article/heladas-lluvias-y-nortes-alerta-por-frente-frio-1668458220750_1024.jpg" />
                            
                        </figure>
                    </article>
                </div>
                <div class="col">
                    <article>
                        <h2>Vientos intensos y descenso termico por el frente frío número 9. Podría descender hasta -10 °C.</h2>
                        <figure>
                            <img src="https://services.meteored.com/img/article/vientos-intensos-y-descenso-termico-por-el-frente-frio-numero-1668449397792_1024.jpeg" />
                            
                        </figure>
                    </article>
                </div>
    
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
