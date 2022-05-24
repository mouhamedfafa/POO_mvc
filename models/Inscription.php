<?php
use App\Core\Model;
class Inscription extends Model{

    private int $id;
    public function __construct(){
      
      }
      

public function ac():Ac{

    $sql="select * from inscription i, personne
    p where p.id=i.ac_id and 
    role like 'ROLE_AC' and
    i.id=".$this->id ;
    
    return new Ac;

}

public function anneeScolaire():AnneScolaire{
      $sql="select * from anne_scolaire a, iscriptiion i
    p where a.id=i.annee_id and 
    i.id=".$this->id ;
    
    return new AnneScolaire;
}
}