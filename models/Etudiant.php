<?php

namespace App\Model;


class Etudiant extends User {
private string $matricule;
private string $sexe;
private string $adresse;

public function __construct()

{
self::$role="ROLE_ETUDIANT";
}

/**
 * Get the value of matricule
 */ 
public function getMatricule(int $id,string $nomComplet)
{
return $this->matricule='$id$nomComplet.';
}

/**
 * Set the value of matricule
 *
 * @return  self
 */ 
public function setMatricule($matricule)
{
$this->matricule = $matricule;

return $this;
}
public static function findAll(): array
    {
        $db = parent::database();
        $db->connexionBD();
        // var_dump(parent::table());die;
        $sql = "select * from " . parent::table() ." where role like ?";
        $results = $db->executeSelect($sql,['ROLE_ETUDIANT']);
        $db->closeConnexion();
        // $sql ="select * from".parent::table()."where role not like '".self::$role."'";
        return $results;

        return [];
    }
public function insert():int{
    $db=parent::database(); 
    $db->connexionBD();
    $sql = "INSERT INTO `Personne` (`nom_complet`,`role`,`login`,`password`,`matricule`) VALUES (?,?,?,?,?)";
    $result=$db->executUpdate($sql,[$this->nomComplet,parent::$role, $this->login, $this->password, $this->matricule]);
    $db->closeConnexion();
    return $result;
    }

}