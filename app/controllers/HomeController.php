<?php
$page = 'home'; // utilisé par header.php pour le CSS et le lien actif

// Données de la page d'accueil (en dur pour l'instant)
$title       = 'Bienvenue sur mon portfolio';
$description = "Portfolio numérique réalisé dans le cadre du BTS SIO — option SLAM. Retrouvez ici mon parcours, mes stages, mes projets professionnels et ma veille technologique.";
$bio         = "Étudiant en BTS SIO (spécialisation SLAM) à Saint-Joseph, La Réunion. Passionné par le développement logiciel et les systèmes d'information.";
$email       = 'nawadabdallah256@outlook.fr';
$linkedin    = 'https://www.linkedin.com/in/nawad-abd';
$github      = 'https://github.com/nawad256-code';
$location    = 'Saint-Joseph, La Réunion';

require 'app/views/partials/header.php';
require 'app/views/home.php';
require 'app/views/partials/footer.php';