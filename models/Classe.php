<?php 

namespace App\Model;
use App\Core\Model;
// use App\Core\Database;

class Classe extends Model {

    //fonctions navigationels
    //ManyToOne avec professeur
    private int $id;
    private string $libelle;
    private string $filiere;
    private string $niveau;


    public function professeurs():array|null{
        $sql="select ........";
        return parent::findBy($sql,[$this->id]);
        
    }
    public function etudiant():Etudiant{
        return new Etudiant();
    }
    
    
    public static function findAll():array{
      $db=self::database();
      $db-> connexionBD();
     
      $sql ="select * from Classe";
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

    public function insert():int{
      $db=parent::database(); 
      $db->connexionBD();

      $sql = "INSERT INTO `Classe` (`libelle`,`filiere`,`niveau`) VALUES (?,?,?,)";

      $result=$db->executUpdate($sql,[$this->libelle,$this->filiere,$this->niveau]);
      $db->closeConnexion(); 
      return $result;
    
      }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }
}
