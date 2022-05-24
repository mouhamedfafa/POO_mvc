<?php
use App\Model\Professeur;
use App\Core\Constantes;

$professeurs = Professeur::findAll();
    require_once Constantes::ROOT().'templates/acceuille/acceuille.html.php';

?>

<div class="table-dark table-striped">
    <div class="card-body">
    <div style="display: flex;justify-content: space-between;" >
    <h4 class="card-title">Liste des Professeurs</h4><button type='button' class='btn btn-outline-success'><a href="add-professeur">++ Ajouter un Prof</a></button>

        </div>
        <p class="card-text">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nom Complet</th>
                <th scope="col">Grade</th>
                </tr>
            </thead>
            <tbody>
            <?php
        // dd($data);
        foreach ($professeurs as $data) {
            echo "<tr>";
            echo "<td>".$data['nom_complet']."</td>";
            echo "<td>".$data['grade']."</td>";
            echo "<td>"."<button type='button' class='btn btn-outline-danger'>supprimer</button>"  ."&nbsp"."<button type='button' class='btn btn-outline-success'>editer</button>". "<td>";

            echo "</tr>";
        }
        ?>
               
            </tbody>
        </table>
        </p>
    </div>
</div>


