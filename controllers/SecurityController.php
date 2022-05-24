<?php
namespace App\controller;
use App\Core\Controller;
use App\Model\User;
use App\Model\Personne;
                                            
class SecurityController extends Controller{

    public function authentification(){
        //1-Affichage du formulaire de connexion=>GET
        if($this->request->isGet()){
session_destroy();
           $this->render('security/login.html.php');
        }
 
        if ($this->request->isPost()){
                $user=User::findUserByLoginAndPassword($_POST["login"],$_POST["password"]);
                
// dd($user);
            if ($user){
                // $user_rol=getRole();
            
                $_SESSION['user-connect']=$user;
                // $this->redirecToRoute("classes");
            // var_dump($_SESSION['user-connect']);
            

           $this->render('acceuille/acceuille.html.php');

            }
            else{
                $this->redirecToRoute("acceuille");
            }    

        }
        
    }

    public function deconnexion(){
        if($this->request->isGet()){

           
        // session_unset($_SESSION['user-connect']);

        session_destroy();  
        $this->redirecToRoute("");
                    
                }
            }
                
  
}