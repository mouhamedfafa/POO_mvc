<?php use App\Core\Constantes;
use App\controller\SecurityController;

?>

                
<ul class="nav justify-content-end mt-1">
        <li class="nav-item">
            <a class="nav-link active" href="">Personne</a>
        </li>
        
        <li class="nav-item">
           <a class="nav-link active" href="<?= Constantes::WEB_ROOT.'logout';?>"> Deconnexion</a>
        </li>
    </ul>


    <?php
      $hidden="hidden";
      $etu="hidden";
      $ac="hidden";
    if ($_SESSION['user-connect'][0]['role']=='ROLE_RP'){
         $hidden='';}

if ($_SESSION['user-connect'][0]['role']=='ROLE_ETUDIANT'){
  $etu='';
    }
    if ($_SESSION['user-connect'][0]['role']=='ROLE_AC'||'ROLE_RP'){
      $ac='';
        }
    ?>
    <div class="jumbotron" style="display:flex;height:3rem; ">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" <?=$ac?> >
                    Etudiant
                </button>          
        <div class="dropdown-menu"  aria-labelledby="triggerId"  >
            <a class="dropdown-item" href="etudiant">Lister des Etudiant</a>
        
            <a class="dropdown-item" href="#">After divider action</a>
        </div>
    </div>
      
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" <?=$hidden?>>
                    Classe
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="classes">Lister des classes</a>
            <a class="dropdown-item" href="#">Creer classe</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"  <?=$hidden?>>
                    Ataché des classes
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="ac">Lister les attaché</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" <?=$ac?> >
                    demande
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
           
            <a class="dropdown-item" href="demande">Liste des demandes</a>
            
        
        </div>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"  <?=$hidden?>>
                 Professeur
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId"> 
            <a class="dropdown-item" href="lister-professeur">Lister les professeur</a>
            <a class="dropdown-item" href="#">Ajouter un professeur</a>

        </div>
    </div> 
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"  <?=$hidden?>>
                    Module
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId">
            <a class="dropdown-item" href="module">les module</a>
        </div>
    </div> 
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"  <?=$etu?>>
                formuler une demande
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId" >
            <a class="dropdown-item" href="#">Demande d'annulation</a>
            <a class="dropdown-item" href="#">Demande de suspension</a>

        </div>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"  <?=$etu?>>
                Mes demandes
                </button>
        <div class="dropdown-menu" aria-labelledby="triggerId" >
            <a class="dropdown-item" href="#">La liste de mes demandes</a>
           

        </div>
    </div>
      
    </div>
    </div>
    
