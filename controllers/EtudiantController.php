<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Etudiant;

class EtudiantController extends Controller{

    public function affecterClasse(){

    }
    public function inscrireetudiant(){

        $this->render('etudiant/inscrireetudiant.html.php');
    }

    public function listeretudiant(){
        if($this->request->isGet()){   
            $etu = new Etudiant();
            $etu = Etudiant::findAll();
        
            $this->render('etudiant/listeretudiant.html.php', $etu);
        }
    }

}   