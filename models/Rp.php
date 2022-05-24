<?php
namespace App\Model;


class Rp extends User { 


public function __construct(){

    self::$role="ROLE_RP";
}

public static function findAll():array{
    $sql ="select * from".parent::table()."where role  like 'ROLE_RP'";
    return $sql; 
}

public function classe():Classe{
    return new Classe();
}

public function insert():int{
    $db=parent::database(); 
    $db->connexionBD();
    $sql = "INSERT INTO `Personne` (`nom_complet`, `role`,`login`,`password`) VALUES (?,?,?,?)";
    $result=$db->executUpdate($sql,[$this->nomComplet,parent::$role, $this->login, $this->password]);
    $db->closeConnexion();
    
    return $result;
    }
}  