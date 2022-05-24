<?

?>

<?php
use App\Model\Demande;
$demande = Demande::findAll();
use App\Core\Constantes;

require_once Constantes::ROOT().'templates/acceuille/acceuille.html.php';

?>

<div class="table-dark table-striped">
    <div class="card-body">
        <h4 class="card-title">Liste des Demande</h4>
        <p class="card-text">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Libelle</th>
                <th scope="col">etat</th>
                <th scope="col">etudiant_id</th>

                </tr>
            </thead>
            <tbody>
            <?php
        foreach ($demande as $data) {
            // dd($data['nom_module']);
            echo "<tr>";
            echo "<td>".$data['libelle']."</td>";
            echo "<td>".$data['etat']."</td>"; 
            echo "<td>".$data['etudiant_id']."</td>"; 

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


