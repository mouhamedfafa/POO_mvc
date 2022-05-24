<?php

namespace App\Model;

class Professeur extends Personne
{
    public function __construct()
    {
        parent::$role = "ROLE_PROFESSEUR";
    }
   

    public function classes(): array
    {

        return [];
    }

    public static function getRole()
    {
        return self::$role='ROLE_PROFESSEUR';
    }
    

    public static function findAll(): array
    {
        $db = parent::database();
        $db->connexionBD();
        // var_dump(parent::table());die;
        $sql = "select * from " . parent::table() . " where role like ?";
        $results = $db->executeSelect($sql,['ROLE_PROFESSEUR']);
        $db->closeConnexion();
        // $sql ="select * from".parent::table()."where role not like '".self::$role."'";
        return $results;

        return [];
    }

    public function insert(): int
    {
        $db = parent::database();
        $db->connexionBD();
        $sql = "INSERT INTO `Personne` (`nom_complet`, `role`,`grade`) VALUES (?,?,?)";
        $result = $db->executUpdate($sql, [$this->nomComplet, parent::$role, $this->grade]);
        $db->closeConnexion();

        return $result;
    }
}
