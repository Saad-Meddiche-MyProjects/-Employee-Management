<?php
require_once './autoload.php';
require_once './controllers/HomeController.php';

$home = new HomeController();

$pages = ['home', 'add', 'update', 'delete'];

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
