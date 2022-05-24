<?php

namespace App\Controller;
use App\Core\Controller;         
use App\Model\Classe;   
    

class ClasseController extends Controller {

    public function listerClasse(){ 

        if($this->request->isGet()){
            $classes = new Classe();

            $classes = Classe::findAll();

            // dd("brdsnx");
        
            $this->render('classe/listerClasse.html.php',$classes);
        }
    }
    public function creerClasse(){
        $this->render('classe/ajouterclasse.html.php');
   
    } 
}