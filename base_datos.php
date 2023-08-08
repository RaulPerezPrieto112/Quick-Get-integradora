<?php

   $server='localhost' ;
   $username='id19098260_php_login_base2';
   $password='RaulEduardoPerezPrieto12$';
   $database='id19098260_php_login_base';

   try{
    $conn=new PDO("mysql:host=$server;dbname=$database;",$username,$password);
   }
   catch(PDOException $e){
    die('conexion fallida: ' .$e->getmessage());
   }
?>
