<?php
$page = $_GET['page'] ?? 'home';

$allowed_pages = ['home', 'bts', 'stages', 'mission', 'projets', 'veille', 'veille-detail', 'documents'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

switch ($page) {
    case 'bts':
        require 'app/controllers/BtsController.php';
        break;
    case 'stages':
        require 'app/controllers/StagesController.php';
        break;
    case 'mission':
        require 'app/controllers/MissionController.php';
        break;
    case 'projets':
        require 'app/controllers/ProjetsController.php';
        break;
    case 'veille':
        require 'app/controllers/VeilleController.php';
        break;
    case 'veille-detail':
        require 'app/controllers/VeilleDetailController.php';
        break;
    case 'documents':
        require 'app/controllers/DocumentsController.php';
        break;
    default:
        require 'app/controllers/HomeController.php';
        break;
}