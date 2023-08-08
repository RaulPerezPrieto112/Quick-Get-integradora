<?php
   
   require 'base_datos2.php';
   require 'base_datos.php';
   require 'config.php';

   $id= isset($_GET['id']) ? $_GET['id'] : '';
   $token=isset($_GET['token']) ? $_GET['token'] : '';


   if($id == '' || $token == ''){

    echo 'Error al procesar la peticion';
    exit;
   }
   else{

        $token_tmp = hash_hmac('sha1',$id,KEY_TOKEN);
        
        if($token != $token_tmp){

            $records = $conn->prepare("SELECT count(id)FROM productos WHERE id=? AND activo=1");
            $records->bindParam(':id', $_POST['id']);
            $records->execute([$id]);
            if($records->fetchcolumn() > 0){
                $records = $conn->prepare("SELECT nombre,descripcion FROM productos WHERE id=? AND activo=1 LIMIT 1");
                $records->bindParam(':id', $_POST['id']);
                $records->execute([$id]);
                $row= $records->fetch(PDO::FETCH_ASSOC);
                $nombre= $row['nombre'];
                $descripcion= $row['descripcion'];
                $dir_images ='images2/productos/' . $id . '/';
                $rutaImg= $dir_images . 'principal.png';

                if(file_exists($rutaImg)){
                    $rutaImg='images2/nofoto.png';
                }


                $imagenes= array();
                $dir = dir($dir_images);

                while(($archivo = $dir->read()) != false){
                    if($archivo != 'principal.png' && (strpos($archivo,'png'))){
                        $imagenes[] = $dir_images . $archivo;
                    }
                }
                $dir->close();

            }

        }
        else{
            echo 'Error al procesar la peticion';
            exit;
        }

        
   }







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
  img {
 max-width: 100%;
 max-height: 100%;
 
}
.cat {
 height: 200px;
 width: 200px;
}
    </style>
    
    
</head>

<body>
    <!--Barra de navegación-->
    <nav class="navbar-default" role="navigation">
    <?php
        include("navbaren.php");
    ?>
    
<br>
    <!--Contenido-->
    <main>
 <div class="container">
  <div class="row justify-content-md-center">

  <div class="row">
    <div class="col-md-6 order-md-1">
        <div class="cat">
        <img src="<?php  echo $rutaImg ?>" alt="No se ha encotrado">
        </div>
    </div>
    <div class="col-md-6 order-md-2">
        <h2>
            <?php   echo $nombre; ?>
            <p class="lead">
                <?php  echo $descripcion ?>
            </p>


        </h2>
    </div>

  </div>
</div>
       
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <?php
        include("footeren.php");
    ?>
</body>

</html>