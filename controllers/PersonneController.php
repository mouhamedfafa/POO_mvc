<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Personne;

class PersonneController extends Controller {

    public function listerPersonne(){
        if($this->request->isGet()){
            
            $personne = new Personne();

            $personne = Personne::findAll();

            // dd("brdsnx");
        
            $this->render('classe/liste.html.php',$personne);
        }
    }
 
}