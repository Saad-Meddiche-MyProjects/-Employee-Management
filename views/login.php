<?php
if (isset($_POST['login'])) {
    $loginUser = new UsersController();
    $loginUser->auth();
}

?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Connexion</h3>
                </div>
                <div class="card-body bg-light">

                    <form method="post" class="d-flex flex-row" >

                        <div class="form-group">
                            <input type="text" name="username" placeholder="Pseudo" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>

                        <button class="btn btn-sm btn-primary" type="submit" name="login">Connexion</button>
                    </form>

                </div>
                <div class="card-footer">
                    <a href="./register" class="btn btn-link">Inscription</a>
                </div>
            </div>
        </div>

    </div>
</div>