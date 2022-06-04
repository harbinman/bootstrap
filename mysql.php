<?php

include_once('phpDatabase/connection.php');
if(isset($_GET['delete'])){

  echo $_GET['delete'];




}

$result=find_all();


global $pdo;



if (isset($_POST['btn-submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $photo = $_FILES['photo']['name'];
    $upload = 'upload/' . $photo;
  
    $query=$pdo->prepare("insert into profile (name,email,tel,photo) values ('$name','$email','$tel','$upload')");
    $query->execute();
    move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
    header('Location:demo.php');



}

   function find_all(){
        global $pdo;
        
        $query=$pdo->prepare("select * from profile");
        $query->execute();

        return $query->fetchAll();

         
      }