<?php 

class Archive{

    public  function find_all(){
        global $pdo;
        
        $query=$pdo->prepare("select * from archive");
        $query->execute();

        return $query->fetchAll();

         
      }

public function find(){




 }

      public function deleteItem($id){
        global $pdo;
        
        $query=$pdo->prepare("DELETE FROM archive WHERE `archive`.`archive_id` =$id");
        $query->execute();
          
        print_r($query);


      }

}

?>