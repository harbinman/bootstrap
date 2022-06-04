<?php 


$host="localhost";
$username = "admin";
$password = "123456";
$db = "project1";
$dsn= "mysql:host=$host;dbname=$db";
try{
    //make pdo connection
   $pdo = new PDO($dsn, $username, $password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
   // report error message
   echo $e->getMessage();
}


?>