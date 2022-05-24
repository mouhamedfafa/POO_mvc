<?php
namespace App\Controller;
use App\Core\Controller;
use App\Model\Ac;


class AcController extends Controller{
  

 
    public function listerac(){
        if($this->request->isGet()){   
            $ac = new Ac();
            $ac = Ac::findAll();
            $this->render('ac/listerac.html.php',$ac);
        }
    }

    public function affecterClasse(){

    }

}   