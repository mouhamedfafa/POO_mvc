

<?php
use App\Model\Ac;
use App\Core\Constantes;
   require_once Constantes::ROOT().'templates/acceuille/acceuille.html.php';
$ac = Ac::findAll();
?>

<div class="table-dark table-striped">
    <div class="card-body">
    <div style="display: flex;justify-content: space-between;" >
    <h4 class="card-title">Liste des Ataches</h4><button type='button' class='btn btn-outline-success'><a href="">++  ajouter un attaché de classe</a></button>

        </div>
        <p class="card-text">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">nom complet</th>
              

                </tr>
            </thead>
            <tbody>
            <?php
        // dd($data);
        foreach ($ac as $data) {
            echo "<tr>";    
            echo "<td>".$data['nom_complet']."</td>";
            echo "<td>"."<button type='button' class='btn btn-outline-danger'>supprimer</button>"  ."&nbsp"."<button type='button' class='btn btn-outline-success'>editer</button>". "<td>";

            echo "</tr>";
        }
        ?>
               
            </tbody>
        </table>
        </p>
    </div>
</div>


