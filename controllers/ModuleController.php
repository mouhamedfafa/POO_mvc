<?php
namespace App\Controller;

use App\Model\Module;
use App\Core\Controller;

class ModuleController extends Controller{

    public function ajoutermodule(){
        $this->render('module/ajoutermodule.html.php');

    }
    public function listermodule(){
        if($this->request->isGet()){

            $module = new Module();
            
            $module = Module::findAll();
                        
            $this->render('module/listermodule.html.php',$module);

    }
    


    
}
}