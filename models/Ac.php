<?php
namespace App\Model;

class Ac extends User{

    // private array  $inscription;
    public function inscription():array{
        return []; 
    }
public function __construct()
{  
self::$role="ROLE_AC";
$this->inscription=[];
}
 
public static function findAll(): array
    {
        $db = parent::database();
        $db->connexionBD();
        // var_dump(parent::table());die;
        $sql = "select * from " . parent::table() . " where role like ?";
        $results = $db->executeSelect($sql,['ROLE_AC']);
        $db->closeConnexion();
        // $sql ="select * from".parent::table()."where role not like '".self::$role."'";
        return $results;

        return [];
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