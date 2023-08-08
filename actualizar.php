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
  $id=$_GET['id'];
  $records = $conn->prepare("SELECT * from productos WHERE id= $id");
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);


?> 
<!doctype html>
<!--[if lte IE 9]>
<html lang="en" class="oldie">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Actualizar</title>
  <link rel="stylesheet" media="all" href="style.css" />
</head>
<body>

<div class="form">
<form action="update.php" method="post">
  <h2>Editar Producto</h2>
  <input type="hidden" name="id" value= "<?php echo $results['id'];?>">
  <p type="Nombre:"> <input type="text" name="name" id=""
        value="<?php echo $results['nombre'];?>" ></p>
        <p type="Descripcion:"> <input type="text" name="description" id=""
        value="<?php echo $results['descripcion'];?>"
        ></p>
        <p type="Id_categoria:"> <input type="text" name="id_category" id=""
        value="<?php echo $results['id_categoria'];?>" ></p>
        <p type="Activo:"> <input type="text" name="active" id=""
        value="<?php echo $results['activo'];?>" ></p>
        <p type="Imagen:"> <input type="file" name="image" id=""
        value="<?php echo $results['image'];?>" ></p>
        <button type="submit" class="btn btn-success">Actualizar producto</button>
        </div>
</body>
</html>