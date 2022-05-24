<?

?>

<?php
use App\Model\Module;
$module = Module::findAll();
use App\Core\Constantes;

require_once Constantes::ROOT().'templates/acceuille/acceuille.html.php';

?>

<div class="table-dark table-striped">
    <div class="card-body">
    <div style="display: flex;justify-content: space-between;" >
    <h4 class="card-title">Liste des Modeules</h4><button type='button' class='btn btn-outline-success'><a href="add-module">++ Ajouter une module</a></button>

        </div>
        <p class="card-text">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nom module</th>
                <th scope="col">libelle</th>
                </tr>
            </thead>
            <tbody>
            <?php
        foreach ($module as $modules) {
            // dd($modules['nom_module']);
            echo "<tr>";
            echo "<td>".$modules['nom_module']."</td>";
            echo "<td>".$modules['libelle']."</td>"; 
            echo "<td>"."<button type='button' class='btn btn-outline-danger'>supprimer</button>" 
             ."&nbsp"."<button type='button' class='btn btn-outline-success'>editer</button>". "<td>";
          
            echo "</tr>";
        }
        ?>
               
            </tbody>
        </table>
        </p>
    </div>
</div>


