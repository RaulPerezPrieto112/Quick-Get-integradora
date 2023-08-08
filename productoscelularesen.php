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

   require 'base_datos.php';
   require 'config.php';


   $recordss = $conn->prepare("SELECT id,nombre,id_categoria,image FROM productos WHERE id_categoria=1");
   $recordss->bindParam(':id', $_POST['id']);
   $recordss->execute();
   $resultado = $recordss->fetch(PDO::FETCH_ASSOC);
   $image= $resultado['image'];

 



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
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link href="imagnes/logotipo.png" rel="icon">

    
    <style>
        ul.navega li {
        display: inline;
        }
    </style>

    
</head>

<body>

    <?php
    include('navbaren.php')
    ?>

    <!--Contenido-->
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             <?php foreach ($recordss as $row ) { ?>
             
                <div class="col">
                    <div class="card shadow-sm">
                        
                        <?php
                        $id=$row['id'];
                        

                        $imagen ="images2/productos/" . $id . "/principal.png";

                       
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
                                    <a href="detalles.php?id=<?php echo $row['id'];?> &token=<?php echo hash_hmac('sha1',$row['id'],KEY_TOKEN);?>" class="btn btn-primary">Detalles</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php }?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <?php
        include("footeren.php");
    ?>
    
</body>

</html>