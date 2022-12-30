<?php
if (isset($_POST['Inscrire'])) {
    $createUser = new UsersController();
    $createUser->register();
}

?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Inscription</h3>
                </div>
                <div class="card-body bg-light">

                    <form method="post" class="d-flex flex-row" action="">
                        <div class="form-group">
                            <input type="text" name="fullName" placeholder="Nom et Prenom" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="username" placeholder="Pseudo" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>

                        <button class="btn btn-sm btn-primary" type="submit" name="Inscrire">Inscription</button>
                    </form>

                </div>
                <div class="card-footer">
                    <a href="./login" class="btn btn-link">login</a>
                </div>
            </div>
        </div>

    </div>
</div>