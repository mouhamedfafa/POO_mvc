

<?php
use App\Model\Etudiant;
use App\Core\Constantes;

$etu= Etudiant::findAll();

?>


    


<div class="table-dark table-striped">
    <div class="card-body">

    <div style="display: flex;justify-content: space-between;" >
    <h4 class="card-title">Liste des Etudiant</h4><button type='button' class='btn btn-outline-success'><a href="inscrire">++ Ajouter un étudiant</a></button>
        </div>
        <p class="card-text">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>

                <th scope="col">nom complet</th>

              

                </tr>
            </thead>
            <tbody>
            <?php
        // dd($data);
        foreach ($etu as $data) {
            echo "<tr>";    
            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['nom_complet']."</td>";
            echo "<td>"."<button type='button' class='btn btn-outline-danger'>supprimer</button>"  ."&nbsp"."<button type='button' class='btn btn-outline-success'>editer</button>". "<button type='button' class='btn btn-outline-warning'>reinscrire</button>". "<td>";


            echo "</tr>";
        }
        ?>
               
            </tbody>
        </table>
        </p>
    </div>
</div>


