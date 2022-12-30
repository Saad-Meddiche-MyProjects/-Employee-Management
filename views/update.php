<?php
if (isset($_POST["id"])) {
    $exitEmploye = new EmployesController();
    $employe = $exitEmploye->getOneEmploye();
    print_r($employe);
}else{
    Redirect::to('home');
}

if (isset($_POST["Update"])) {
    $exitEmploye = new EmployesController();
    $exitEmploye->updateEmploye();
}


// print_r($employes);

?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier un employer</div>

                <div class="card-body bg-light">
                    <a href="./add" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-home">

                        </i>
                    </a>
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo $employe->id ?>">
                        <div class="form-group">
                            <label for="Nom">Nom</label>
                            <input type="text" name="nom" class="form-control" placeholder="nom" value="<?php echo $employe->nom ?>">
                        </div>
                        <div class="form-group">
                            <label for="Prenom">Prenom</label>
                            <input type="text" name="Prenom" class="form-control" placeholder="Prenom" value="<?php echo $employe->prenom ?>">
                        </div>
                        <div class="form-group">
                            <label for="Matricule">Matricule</label>
                            <input type="number" name="Matricule" class="form-control" placeholder="Matricule" value="<?php echo $employe->matricule ?>">
                        </div>
                        <div class="form-group">
                            <label for="Departement">Departement</label>
                            <input type="text" name="Departement" class="form-control" placeholder="Departement" value="<?php echo $employe->depart ?>">
                        </div>
                        <div class="form-group">
                            <label for="Post">Post</label>
                            <input type="text" name="Post" class="form-control" placeholder="Post" value="<?php echo $employe->poste ?>">
                        </div>
                        <div class="form-group">
                            <label for="Date_Emb">Date Emb</label>
                            <input type="datetime" name="Date_Emb" class="form-control" value="<?php echo $employe->date_emb ?>">
                        </div>
                        <div class="form-group">
                            <select class="form-select" type="number" aria-label="Default select example" name="status">

                                <option value="0" <?php echo $employe->status ? 'selected' : ' ' ?>>NonActive</option>
                                <option value="1" <?php echo !$employe->status ? 'selected' : ' ' ?>>Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Update" class="btn btn-primary">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>