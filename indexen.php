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


<!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
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

	<!-- Magnific Popup core CSS file -->

	
	<script src="js/modernizr-2.8.3.min.js"></script> 

	<link href="imagnes/logotipo.png" rel="icon">

	
<style>
	.colo{
		color:white;
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
			<h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">Where the products are at your fingertips</h3>
			
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
		include("navbaren.php");
	?>
	
	<!-- Qué es Quick-Get? -->
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>What is Quick-Get?</h2> <br> 
				<p class="lead" style="margin-top:0">Where to find is faster</p>
				
			</div>
			
				
			<div class="row tworow">
			
				<div class="col-sm-4  wow fadeInDown text-center">
				  <img class="rotate" src="img/icon/map.svg" alt="Generic placeholder image">
				  <h3>Mission</h3>
				  <p class="lead">
					Help users who browse the internet to find information about all those products that they love so much. 
				  </p>
				</div>
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/retina.svg" alt="Generic placeholder image">
				   <h3>Vision</h3>
				   <p class="lead">To be a place on the web where users feel comfortable and can obtain reliable information that resolves all their doubts. </p>
				</div>
				
				<div class="col-sm-4 wow fadeInDown text-center">
				  <img  class="rotate" src="img/icon/browser.svg" alt="Generic placeholder image">
				   <h3>objectives</h3>
				 <p class="lead"> Position ourselves in the top of the most popular searches of the best browsers with hundreds of visits every day. </p>
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
                    <h3 class="section-heading">telephony accessories</h3>
					<div class="sub-title lead3"></div>
                    <p class="lead">
					The smartphone has become the technological hub for users. 
					Today, people use their cell phones to communicate, listen to music, watch movies and many other things. 
					Many of these functions are perfectly complemented by accessories such as headphones, portable batteries and other products. 
					Around the world, these types of gadgets are rapidly entering the market, and Quick-Get is here to give you the information you need to know about these new products.
					</p>

					
					 <a class="btn btn-embossed btn-info" href="productoscelularesen.php" role="button">See products</a></p>
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
                    <h3 class="section-heading">tablet accessories</h3>
                    <p class="lead">
					Tablets are an excellent working method for graphic design, photo editing,
					watching series and movies or playing games.
					That's why their accessories help to give a better experience in their use and here at 
					Quick-Get we help you to know the information about these accessories.
					</p>
					 <a class="btn btn-embossed btn-info" href="productostabletasen.php" role="button">See products</a>
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
                    <h3 class="section-heading">computer accessories</h3>
                    <p class="lead">
					Computers are an excellent working method and therefore, their accessories must be
					their accessories must be just as good.
					Quick-Get gives you the information about all the accessories/peripherals a computer needs and some extra 
					that a computer needs and some extra options that will help you to work easier.
					</p>
					
					</p>
					 <a class="btn btn-embossed btn-info" href="productoscomputadorasen.php" role="button">See products</a>
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
				<h2>What do our users think?</h2>
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
	
	<div  class="content-section-c ">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Get personalized information</h2>
				<p class="lead" style="margin-top:0">Join the Quick-Get family</p>
			 </div>
			<!-- <div class="col-md-6 col-md-offset-3 text-center">
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
			</div>	 -->
			</div>>
		</div>
	</div>	
	
	<!-- productos -->
	<div id="productos" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Products</h2>
				<p class="lead" style="margin-top:0">Find the best information on your favorite products</p>
			 </div>
			 
				<div class="col-sm-6  block wow bounceIn">
					<div class="row">
						<div class="col-md-4 box-icon rotate"> 
							<i class="fa fa-desktop fa-4x "> </i> 
						</div>
						<div class="col-md-8 box-ct">
							<h3> List of products </h3>
							<p> Sorted by operating system. Choose the one you like the most. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-picture-o fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> Your products in daily life </h3>
						<p> This section will help you better understand the dimensions of your products.</p> 
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
							<h3> your wish list </h3>
							<p> Here you will see the products that you like the most. </p>
						</div>
				  </div>
			  </div>
			  <div class="col-sm-6 block wow bounceIn">
					<div class="row">
					  <div class="col-md-4 box-icon rotate"> 
						<i class="fa fa-heart fa-4x "> </i> 
					  </div>
					  <div class="col-md-8 box-ct">
						<h3> The most voted </h3>
						<p>What people like the most you will see here.</p> 
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
				<h2> Your space <br><br> Your ideas<br><br>Your Products</h2>
				<br>
				<p class="lead" style="margin-top:0"></p>
			
			
			 </div>
			</div>
		</div>
	</div>
	
	
	
	
	
<div class="colorfoo" background-color:red>

<!-- footer -->

<?php 
include("footeren.php");
?>

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