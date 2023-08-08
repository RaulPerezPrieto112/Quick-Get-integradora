<?php
 

  require 'base_datos.php';
  $user = null;
  $results = null;
 

    

    if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, name,email password,type FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

  
    

    if (count($results) > 0) {
      $user = $results;
    }
    
  }








        
    

  


?> 



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css1/navbar.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script>
    $(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});
    </script>
</head>
<body>

    <nav>
        <ul class="menu">
       
            <li class="logo"><a href="index.php"><img src="imagnes\logotipo.png" alt="" style="hight: 100px; width: 100px;"></a></li>
            <li class="item"><a href="#whatis"><?php if(!empty($user)): ?>
                     Bienvenido:  <?= $user['name']; ?>   <?php endif; ?></a></li>

            <li class="item"><p>Selecciona tu idioma:</p></li>
            <li class="item"><a href="index.php"><img src="img/icon/mexico.png" alt=""></a></li>
            <li class="item"><a href="indexen.php"><img src="img/icon/estados-unidos.png" alt=""></a></a></li>         
            <li class="item"><a href="index.php#Inicio">Inicio</a></li>
            <li class="item"><a href="index.php#opiniones">Opiniones</a></li>
            <li class="item"><a href="index.php#productos">Productos</a></li>

            <?php if(!empty($results)&&($results['type']==1 && !empty($user))): ?>
                <li class="item"><a href="editar.php">Editar</a></li>

         
                <?php endif; ?>	

    
            <?php if(!empty($user) ): ?>
                        <li class="item button secondary"><a href="cerrarprueba.php">cerrar sesion</a></li>
                        <?php else :?>
                            <li class="item button"><a href="inicioprueba.php">Iniciar sesion</a></li>
                        <?php endif; ?>	
            <li class="toggle"><span class="bars"></span></li>
            
        </ul>
    </nav>

    <main>
        <a href="https://youtube.com/c/FollowAndrew" style="position:fixed;bottom:0;color:teal;display:block;text-align:center;font-size:1em"></a>
    </main>
    
</body>
</html>