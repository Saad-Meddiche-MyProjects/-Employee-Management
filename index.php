<?php
require_once './autoload.php';


$home = new HomeController();

/* In this array we stock only the pages that the user can see */
$pages = ['home', 'add', 'update', 'delete', 'logout'];

/* Check the user if he logged in , if not then always send him to register or login page */
if (isset($_SESSION["logged"]) && $_SESSION["logged"] === true) {

    require_once './views/includes/header.php';

    // Check the url if it is contain ?page
    // If Not goto Home page
    if (isset($_GET['page'])) {

        //check if the entred value  is located in the array page
        // if Not show 404
        if (in_array($_GET['page'], $pages)) {

            $page = $_GET['page'];
            $home->index($page);
        } else {
            include('views/includes/404.php');
        }
    } else {
        $home->index('home');
    }

    require_once './views/includes/footer.php';
} else if (isset($_GET['page']) && $_GET['page'] === 'register') {
    $home->index('register');
} else {
    $home->index('login');
}
