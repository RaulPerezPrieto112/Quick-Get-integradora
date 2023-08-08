<?php
  session_start();

  require 'base_datos.php';

    if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, name,email password,type FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }

  $records = $conn->prepare('SELECT * from productos');
  $records->execute();
  $results = $records->fetchAll(PDO::FETCH_ASSOC);


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <style>

body{
  background: #ebeef3;
}

h2{ color: black}

a{color: black}

p{color: black}





    </style>
</head>
<body>
<div class="container">


<div class="row">
    <div class="row" style="margin-top: 7rem;">
            <center><h2> LIST OF PRODUCTS</h2></center>
            <br>
            <center><p>Exit to main menu: <a href="indexen.php"><img src="img\icon\salir.png" alt=""></a> </p></center></div>
            <center><p class="espacio">Add a new product: <a href="registraren.php"><img src="img\icon\mas.png" alt="No se ha encontrado"></a> </p></center>
            
            <table class="table table-light table-striped">
                <thead>
                    <tr class="table-dark">
                      
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Id_category</th>
                        <th scope="col">Active</th>
                        <th scope="col" >Edit product</th>
                        <th scope="col" >Delete product</th>

                    </tr>
                </thead>
                <tr>
                <?php foreach($results as $product){ ?>
                  <th scope="row"> <?php echo $product['id'];?></th>
                  <td><?php echo $product['nombre'];?></td>
                  <td><?php echo $product['descripcion'];?></td>
                  <td><?php echo $product['id_categoria'];?></td>
                  <td><?php echo $product['activo'];?></td>
                  
                  <td><a href="actualizaren.php?id=<?php echo $product['id'];?>"><img src="img\icon\editar.png" alt="No se encontrado"></a></td>
                  <td><a href="eliminar.php?id=<?php echo $product['id'];?>"><img src="img\icon\eliminar.png" alt="No se encontrado"></a></td>

                 </tr>
<?php }?>


 



  </table>




</div>


    
</body>
</html>