<?php
include('base_datos.php');

$id=$_POST['id'];
$name=$_POST['name'];
$description=$_POST['description'];
$id_category=$_POST['id_category'];
$active=$_POST['active'];
$image=$_POST['image'];




        $records = $conn->prepare("UPDATE productos 
        SET nombre ='".$name."',
        descripcion ='".$description."',
        id_categoria ='".$id_category."',activo ='".$active."',image ='".$image."' WHERE id = $id");
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        header ("Location:editar.php");


?>
