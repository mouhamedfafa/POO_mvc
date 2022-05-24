<?php
namespace App\Core;

use PDO;

class Database {

private \PDO|null $pdo=null;

public function connexionBD():void{


// $this->pdo= new \PDO("mysql:host=127.0.0.1;dbname=poo_mouhamed_faye","root","root");

   try{

      //poo_mouhamed_faye;

      $ds="mysql:host=127.0.0.1;dbname=poo_mouhamed_faye;port:8082";
      //die('in connexion');

      $name = "poo";

         $this->pdo= new \PDO("mysql:host=127.0.0.1:3308;dbname=poo","root","",);

      

         // echo "connexion reussie";


   }
      catch(\PDOException $execption){
            
      echo  $execption->getMessage();  
    
      // exit('Erreur de Connexion');

 }
 

}
 public function closeConnexion():void{

    $this->pdo=null;
 }
 public function executeSelect(string $sql,array $data=[],bool $single=false):object|array|null{
     $query=$this->pdo->prepare($sql);
     $query->execute($data);  
     if($single){
        $result=$query->fetch();    

     }else{
          $result=$query->fetchAll();    
     }
return $result;
   
 }

 public function executUpdate(string $sql,array $data=[],bool $single=false):int{
$query=$this->pdo->prepare($sql);
$query->execute($data);
//insert=> retourner l'id generer
   return $query->rowCount();
}


} 