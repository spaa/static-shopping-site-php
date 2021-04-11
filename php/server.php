<?php

   require realpath(__DIR__ . '/../vendor/autoload.php');
   $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__,1));
   $dotenv->load();

   $db_name = $_ENV['DB_NAME'];
   $db_user = $_ENV['DB_USER_NAME'];
   $db_pass = $_ENV['DB_PASSWORD'];
   $db_route = $_ENV['DB_ROUTE'];
   //connect to database

   $db = mysqli_connect($db_route, $db_user , $db_pass, $db_name);
   //$db = mysqli_connect('localhost', 'root' , '', 'shopping');
   
   if(!$db){
   	die("Connection Failed: ".msqli_connect_error());
   }
?>

