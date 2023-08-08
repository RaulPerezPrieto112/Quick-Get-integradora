<?php
if(isset($_POST["submit"])){
include 'base_datos.php';

        $records = $conn->prepare("INSERT INTO productos
        VALUES (0,'".$_POST["name"]."','".$_POST["description"]."','".$_POST["id_category"]."','".$_POST["active"]."','".$_POST["image"]."')");
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        header ("Location:editar.php");


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" media="all" href="style.css" />
    <title>Registro</title>
    <style>
#webform{
   
    margin-top:5rem;
    text-align: center;

}
#webform h2{

    margin-bottom: 5rem;


}
.form{width: 370px;
    height: 680px;}


    </style>
</head>
<div class="form">
<form action="" method="post">
  <h2>Registrar producto</h2>
        <p type="Nombre:"> <input type="text" name="name" id=""
        value="" ></p>
        <p type="Descripcion:"> <input type="text" name="description" id=""
        value=""
        ></p>
        <p type="Id_categoria:"> <input type="text" name="id_category" id=""
        value="" ></p>
        <p type="Activo:"> <input type="text" name="active" id=""
        value="" ></p>
        <p type="Imagen:"> <input type="file" name="image" id=""
        value="" ></p>
        <button class="btn btn-success" type="submit"  name="submit">Enviar registro</button><br/>
        </div>


    </div>
    
</body>
</html>