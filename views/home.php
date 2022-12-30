<?php
if (isset($_POST['find'])) {
    $data = new EmployesController();
    $employes = $data->findEmployes();
} else {
    $data = new EmployesController();
    $employes = $data->getAllEmployes();
}

?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body bg-light">
                    <a href="./add" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-plus">
                        </i>
                    </a>
                    <a href="./home" class="btn btn-sm btn-secondary mary mr-2 mb-2">
                        <i class="fas fa-home">
                        </i>
                    </a>
                    <a href="./logout" class="btn btn-sm btn-secondary mary mr-2 mb-2">
                        <i class="fas fa-user mr-2"><?php echo $_SESSION['username']; ?></i>
                    </a>
                    <form method="post" class="d-flex flex-row justify-content-end" action="">
                        <input type="text" name="search" placeholder="Recherche">
                        <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom et Prenom</th>
                                <th scope="col">Matricule</th>
                                <th scope="col">Departement</th>
                                <th scope="col">Post</th>
                                <th scope="col">Date emb</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employes as $employe) : ?>
                                <tr>
                                    <th scope="row"><?php echo $employe["nom"] . ' ' . $employe["prenom"] ?></th>
                                    <td><?php echo $employe["matricule"] ?></td>
                                    <td><?php echo $employe["depart"] ?></td>
                                    <td><?php echo $employe["poste"] ?></td>
                                    <td><?php echo $employe["date_emb"] ?></td>
                                    <td><?php echo ($employe["status"] % 2 == 0)
                                            ?
                                            '<span class="btn btn-danger">Active</span>'
                                            :
                                            '<span class="btn btn-success">NonActive</span>';
                                        ?></td>
                                    <td class="d-flex flex-row gap-2">
                                        <form action="update" method="post">
                                            <input type="hidden" name="id" value="<?php echo $employe["id"] ?>">
                                            <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                        </form>
                                        <form action="delete" method="post">
                                            <input type="hidden" name="id" value="<?php echo $employe["id"] ?>">
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure!');"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>