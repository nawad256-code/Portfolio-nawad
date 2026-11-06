<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio — Nawad</title>
    <link rel="stylesheet" href="css/<?= $page ?>.css">
</head>
<body>

<header class="site-header">
    <span class="site-header__name">Portfolio</span>
    <nav class="site-header__nav">
        <a href="index.php?page=home" class="<?= $page === 'home' ? 'active' : '' ?>">Accueil</a>
        <a href="index.php?page=bts" class="<?= $page === 'bts' ? 'active' : '' ?>">Le BTS SIO</a>
        <a href="index.php?page=stages" class="<?= ($page === 'stages' || $page === 'mission') ? 'active' : '' ?>">Stage</a>
        <a href="index.php?page=projets" class="<?= $page === 'projets' ? 'active' : '' ?>">Projets</a>
        <a href="index.php?page=veille" class="<?= ($page === 'veille' || $page === 'veille-detail') ? 'active' : '' ?>">Veille techno</a>
        <a href="index.php?page=documents" class="<?= $page === 'documents' ? 'active' : '' ?>">Documents</a>
    </nav>
</header>

<main>