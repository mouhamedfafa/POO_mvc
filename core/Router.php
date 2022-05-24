<?php
namespace App\Core;

use App\Exception\RouteNotFoundException;
use App\Controller\SecurityController;
use App\Controller\AcController;

class Router{
    private Request $request;

    public function __construct(){
       $this->request=new Request; 
    }
    private array $routes=[];
    public function route(string $uri,array $action){
        $this->routes[$uri]=$action;
    }

    public function resolve(){
// var_dump($this->request->getUri()[0]);
        $uri="/".$this->request->getUri()[0];//[0]
        
        if(isset($this->routes[$uri])){

                $route=$this->routes[$uri];
                [$ctrClass,$action]=$route;

         
                
// dd($action);
                if(class_exists($ctrClass) && method_exists($ctrClass,$action)){
                   

                    $ctrl=new $ctrClass($this->request);//$ctrl=new SecurityController()
            
            
            //         $free=['SecurityController/authentification'];
            //  $freetest= explode("\\",$ctrl::class)[2]."/".$action;//stockage de tte les pages ki n'on pas besoin de connexion//

           //  if(in_array("*", $free)||in_array($freetest,$free)){
                    call_user_func(array($ctrl,$action));
                        
            //  }
                    //  elseif (Session::is_connect()){
                    //     call_user_func(array($ctrl,$action));


                    //  }else{
                    //     throw new RouteNotFoundException();
                    //  }
                    
                }else{

                throw new RouteNotFoundException();
                }
            }else{
                $obj = new SecurityController($this->request);

                call_user_func(array($obj,"authentification"));
                // throw new RouteNotFoundException();
            }
    }
}


