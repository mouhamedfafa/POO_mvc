<?php
namespace App\Model;
use App\Core\Model;

class Demande extends Model{
    private int $id;
    private string $libelleDemande;

    
    public function demande():array{
        
        return [];
    }

  public static function findAll():array{
      $db=self::database();
      $db-> connexionBD();
     
      $sql ="select * from Demande";
      $result=$db->executeSelect($sql);
      $db-> closeConnexion();
      return $result;
  }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelleModule
     */ 
    public function getLibelleModule()
    {
        return $this->libelleDemande;
    }

    /**
     * Set the value of libelleModule
     *
     * @return  self
     */ 
    public function setLibelleModule($libelleDemande)
    {
        $this->libelleDemande = $libelleDemande;

        return $this;
    }
}