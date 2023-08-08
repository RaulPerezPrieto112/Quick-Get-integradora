<?php
include('base_datos.php');

$id=$_GET['id'];

$records = $conn->prepare("DELETE from productos WHERE id = $id");
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);
header ("Location:editar.php");



?>
