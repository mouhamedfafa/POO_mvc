

<?php
use App\Model\Classe;
use App\Core\Constantes;

$classes = Classe::findAll();

    require_once Constantes::ROOT().'templates/acceuille/acceuille.html.php';


?>

<div class="table-dark table-striped">
    <div class="card-body">
    <div style="display: flex;justify-content: space-between;" >
    <h4 class="card-title">Liste des Classes</h4><button type='button' class='btn btn-outline-success'><a href="add-classe">++ Ajouter une classe</a></button>

        </div>
        <p class="card-text">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Libelle</th>
                <th scope="col">filiere</th>
                <th scope="col">niveau</th>
                </tr>
            </thead>
            <tbody>
            <?php
        // dd($data);
        foreach ($classes as $data) {
            echo "<tr>";    
            echo "<td>".$data['libelle']."</td>";
            echo "<td>".$data['filiere']."</td>";
            echo "<td>".$data['niveau']."</td>";
            echo "<td>"."<button type='button' class='btn btn-outline-danger'>supprimer</button>"  ."&nbsp"."<button type='button' class='btn btn-outline-success'>editer</button>". "<td>";

            echo "</tr>";
        }
        ?>
               
            </tbody>
        </table>
        </p>
    </div>
</div>


