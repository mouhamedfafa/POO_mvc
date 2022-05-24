<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Demande;

class DemandeController extends Controller{


    public function listerdemande(){
        if($this->request->isGet()){   

            $demande = new Demande();

            $demande = Demande::findAll();
        
            $this->render('demande/demande.html.php',$demande);
        }
    }

    public function ajouterdemande(){
        
    }

}   