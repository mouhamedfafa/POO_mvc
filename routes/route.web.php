<?php

use App\Core\Router;
use App\Controller\SecurityController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ProfesseurController;
use App\Controller\ModuleController;
use App\Controller\AcController;
use App\Controller\EtudiantController;
use App\Controller\DemandeController;



use App\Exception\RouteNotFoundException;

$router=new Router();
$router->route('/login',[SecurityController::class,"authentification"]);
$router->route('/logout',[SecurityController::class,"deconnexion"]);
$router->route('/module',[ModuleController::class,"listermodule"]);
$router->route('/add-module',[ModuleController::class,"ajoutermodule"]);

$router->route('/demande',[DemandeController::class,"listerdemande"]);


$router->route('/ac',[AcController::class,"listerac"]);
$router->route('/etudiant',[EtudiantController::class,"listeretudiant"]);
$router->route('/inscrire',[EtudiantController::class,"inscrireetudiant"]);


$router->route('/classes',[ClasseController::class,"listerClasse"]);

$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personne',[PersonneController::class,"listerpersonne"]);
$router->route('/lister-professeur',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/add-professeur',[ProfesseurController::class,"ajouterprofesseur"]);


// $router->resolve();


 try{
    //essaie de resoude la route
    $router->resolve();

 }catch(RouteNotFoundException $ex){
     //Capture l'exception et affiche
     echo $ex->message;
 }