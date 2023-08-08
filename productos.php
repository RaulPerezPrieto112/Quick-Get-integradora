<?php
   
   require 'base_datos2.php';
   require 'base_datos.php';

   $records = $conn->prepare("SELECT id,nombre FROM productos WHERE activo=1");
   $records->bindParam(':id', $_POST['id']);
   $records->execute();
   $resultado = $records->fetch(PDO::FETCH_ASSOC);




?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">
    <title>Tienda Online</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <link href="imagnes/logotipo.png" rel="icon">

    <style>
        ul.navega li {
        display: inline;
  }
    </style>
    
    
</head>

<body>
    <!--Barra de navegación-->
    <nav class="navbar-default" role="navigation">
    <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">Quick-Get</a>
                
			</div>
				<ul class="navega">

				</ul>
			
		   
		</div>


    </div> 
    </nav> 
    
<br>
    <!--Contenido-->
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             <?php foreach ($records as $row ) { ?>
             
                <div class="col">
                    <div class="card shadow-sm">
                        <?php
                        $id=$row['id'];

                        $imagen ="images2/productos/" . $id . "/principal.png";

                        if(!file_exists($imagen)){

                            $imagen = "images2/nofoto.png";
                        }


                        ?>

                        <img src="<?php echo $imagen; ?>">
                        <div class="card-body">
                            <h5 class="card-title"> <?php  
                            echo $row['nombre'];
                            ?>
                            </h5>
                            <br>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary">Detalles</a>
                                </div>
                                <a href="#" class="btn btn-success">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--
        Marko Robles
        Códigos de Programación
        2021
    -->
</body>

</html>