<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Professeur;

class ProfesseurController extends Controller{

    public function affecterClasse(){

    }

    public function listerProfesseur(){
        if($this->request->isGet()){   
            $professeurs = new Professeur();
            $professeurs = Professeur::findAll();
        
            $this->render('professeur/listerProfesseur.html.php', $professeurs);
        }
    }
    public function ajouterprofesseur(){
        $this->render('professeur/ajouterprofesseur.html.php');

    }

}   