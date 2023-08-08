<?php
  session_start();

  require 'base_datos.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, name,email password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }

?> 

<!doctype html>
<html> 
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Flatfy – Free Flat and Responsive HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<!-- //for-mobile-apps -->
	<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/modernizr-2.8.3.min.js"></script>  

	<link href="imagnes/logotipo.png" rel="icon">

<style>
	.colo{
		color:white;
	}
	.colorfoo{
		background-color: grey;
	}
</style>

</head>

<body id="home">

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	
	<!-- FullScreen -->
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">Quick-Get</h1>
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Donde los productos estan al alcance de tus manos</h3>
			
		</div>    
        <!-- /.container -->
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>
    </div>
	
	<!-- NavBar-->
	<?php  
	include("navbar.php");
	?>
	
	<!-- Qué es Quick-Get? -->
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>¿Qué es Quick-Get?</h2> <br> 
				<p class="lead" style="margin-top:0">Donde encontrar es más rápido</p>
				
			</div>
			
				
			<div class="row tworow">
			
				<div class="col-sm-4  wow fadeInDown text-center">
				  <img class="rotate" src="img/icon/map.svg" alt="Generic placeholder image">
				  <h3>Misión</h3>
				  <p class="lead">Ayudar a los usuarios que navegan por internet a encontrar información sobre todos esos producto que tanto les encantan. </p>
				</div>
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/retina.svg" alt="Generic placeholder image">
				   <h3>Visión</h3>
				   <p class="lead">Ser un lugar en la web donde los usuarios se sientan cómodos y puedan obtener información de confianza que les resuelva todas sus dudas. </p>
				</div>
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/browser.svg" alt="Generic placeholder image">
				   <h3>Objetivos</h3>
				 <p class="lead">Posicionarnos en el top de busquedas más populares de los mejores navegadores con cientos de visitas día por día . </p>
				</div> 
				
			</div><!-- /.row -->
		</div>
	</div>
	
	<!-- Inicio -->
    <div id ="Inicio" class="content-section-a">

        <div class="container">
			
            <div class="row">
			
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/ipad.png" alt="">
                </div>
				
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Accesorios de telefonía</h3>
					<div class="sub-title lead3"></div>
                    <p class="lead">
						El teléfono inteligente se ha convertido en el centro tecnológico de los usuarios. 
						Hoy, la gente usa su celular para comunicarse, oír música, ver películas y muchas otras cosas. 
						Varias de estas funciones son perfectamente complementadas por algunos accesorios como audífonos, baterias portatiles y otros productos. 
						En todo el mundo, este tipo de gadgets están entrando rápidamente al mercado, y Quick-Get se encarga de darte la informacion necesaria para que conozcas a fondo estos nuevos productos.
					</p>

					 
					 <a class="btn btn-embossed btn-info" href="productoscelulares.php" role="button">Ver Productos</a></p>
					
				</div>   
            </div>
        </div>
        <!-- /.container -->
    </div>

    <div class="content-section-b"> 
		
		<div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                     <div id="owl-demo-1" class="owl-carousel">
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
					</div>       
                </div>
				
                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Accesorios para tabletas</h3>
					<div class="sub-title lead3"></div>
                    <p class="lead">
					Las tabletas son un excelente método de trabajo para diseño gráfico, edición de fotos,
					pasar el rato viendo series y películas o para jugar.
					Por ello sus accesorios ayudan a dar una mejor experiencia es su uso y aquí en 
					Quick-Get te ayudamos a que conozcas la información acerca de estos accesorios. 
					</p>
					 <a class="btn btn-embossed btn-info" href="productostabletas.php" role="button">Ver Productos</a>
					</p>
				</div>  			
			</div>
        </div>
    </div>

    <div class="content-section-a">

        <div class="container">

             <div class="row">
			 
				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/doge.png" alt="">
                </div>
			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Accesorios de computadora</h3>
                    <p class="lead">
						Las computadoras son un metodo de trabajo excelente y por ello
						sus accesorios deben ser igual de buenos.
						Quick-Get te brinda la informacion acerca de todos los accesorios/perifericos 
						que una computadora necesita y algunas opciones extra que te ayudaran a trabajar mas facil. 
					</p>
					
					
					</p>
					 <a class="btn btn-embossed btn-info" href="productoscomputadoras.php" role="button">Ver Productos</a>
					</p>
				</div>           
            </div>
        </div>

    </div>

	<!-- ¿Qué opinan nuestros usuarios? -->
	<div id="opiniones" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>¿Qué opinan nuestros usuarios?</h2>
				<p class="lead" style="margin-top:0"></p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">
				
				<a href="img/slide/1.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/1.png" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/slide/2.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/2.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/3.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/3.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/1.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/4.png" alt="Owl Image">
					</div>
				</a>
				
               <a href="img/slide/2.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/5.png" alt="Owl Image">
					</div>
				</a>
				
				<a href="img/slide/3.png" class="image-link">
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/6.png" alt="Owl Image">
					</div>
				</a>
              </div>       
          </div>
        </div>


	</div>
	
	<!-- <div  class="content-section-c ">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Obten información personalizada</h2>
				<p class="lead" style="margin-top:0">Únete a la familia Quick-Get</p>
			 </div>
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow btn-primary morph-button-inflow-1">
							<button type="button primary "><span>Subscribe to our Newsletter</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4 ">
										<h2 class="morph-clone"></h2>
										<form>
											<p><label>Tu correo electrónico</label><input type="text"/></p>
											<p><label>Contraseña</label><input type="text"/></p>
											<p><button>Enviar</button></p>
										</form>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			</div>
		</div>
	</div>	 -->
	
	<!-- productos -->
	<div id="productos" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Productos</h2>
				<p class="lead" style="margin-top:0">Encuentra la mejor información de tus productos favoritos</p>
			 </div>
			 
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-desktop fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Lista de productos </h3>
							<p> Ordenados por sistema operativo. Elige el que mas te agrade. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-picture-o fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Tus productos en la vida diaria </h3>
						<p> Este apartado te ayudrá a comprender mejor las dimensiones de tus productos.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		  
		  <div class="row tworow">
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-magic fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> Tu lista de deseos </h3>
							<p> Aquí se verás los productos que más te gustan. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-heart fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Lo más votado </h3>
						<p>Lo que más le gusta a las personas lo verás aquí.</p> 
					  </div>
					</div>
			  </div>
		  </div>
		</div>
	</div>
	
	<!-- Banner Download -->
	<div id="downloadlink" class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2> Tu espacio <br><br>Tus ideas <br><br>Tus Productos</h2>
				<br>
				<p class="lead" style="margin-top:0"></p>
			
			
			 </div>
			</div>
		</div>
	</div>
	

<div class="colorfoo" background-color:red>

	<div id="footer" class="footer-grids">
				
				<div class="clear"></div>
			
			<div class="copy-right-grids">
			<div class="footer one">
					<h3>Mas sobre nuestra compañia</h3>
					<p> Esta compañia nuestro principal objetivo es que te sientas comodo </p>
					<p class="adam">- Desarrolladores, Quick-Get</p>
					<div class="clear"></div>
				</div>
				<div class="footer two">
					<h3>Keep Connected</h3>
					<ul>
						<li><a class="fb" href="#"><i></i>Sigenos en Facebook</a></li>
						<li><a class="fb1" href="#"><i></i>Sigenos en Twitter</a></li>
						<li><a class="fb2" href="#"><i></i>Sigenos en Google Plus</a></li>
						<li><a class="fb3" href="#"><i></i>Sigenos en Dribbble</a></li>
						<li><a class="fb4" href="#"><i></i>Sigenos en Pinterest</a></li>
					</ul>
				</div>
				<div class="footer three">
					<h3>Infromacion de contacto</h3>
					<ul>
						<li>Quick-Get<span>Chihuahua,Chihuahua</span>calle espursito 30-1183  </li>
						<li>6145528546  </li>
						<li><a href="mailto:info@example.com">Quick-Get@gmail.com</a> </li>
					</ul>
				</div>
				<div class="copy-left">
						<p class="colo">© 2022 Quick-Get Page Web. All Rights Reserved </p>
				</div>
				<div class="copy-right">
					<ul>
						<li><a href="#">Company Information</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>

	</div>

</div>

	
	
	
	


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		  
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 
</body>

</html>
