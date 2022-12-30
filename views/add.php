<?php
if (isset($_POST["Valider"])) {
    $newEmploye = new EmployesController();
    $newEmploye->addEmploye();
}


// print_r($employes);

?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter un employer</div>

                <div class="card-body bg-light">
                    <a href="./add" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-home">

                        </i>
                    </a>
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="Nom">Nom</label>
                            <input type="text" name="nom" class="form-control" placeholder="nom">
                        </div>
                        <div class="form-group">
                            <label for="Prenom">Prenom</label>
                            <input type="text" name="Prenom" class="form-control" placeholder="Prenom">
                        </div>
                        <div class="form-group">
                            <label for="Matricule">Matricule</label>
                            <input type="number" name="Matricule" class="form-control" placeholder="Matricule">
                        </div>
                        <div class="form-group">
                            <label for="Departement">Departement</label>
                            <input type="text" name="Departement" class="form-control" placeholder="Departement">
                        </div>
                        <div class="form-group">
                            <label for="Post">Post</label>
                            <input type="text" name="Post" class="form-control" placeholder="Post">
                        </div>
                        <div class="form-group">
                            <label for="Date_Emb">Date Emb</label>
                            <input type="date" name="Date_Emb" class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="form-select" type="number" aria-label="Default select example" name="status">
                                <option selected>Open this select menu</option>
                                <option value="0">NonActive</option>
                                <option value="1">Active</option> 
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Valider" class="btn btn-primary">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>