<?php
$page = 'veille-detail';

require 'app/models/VeilleModel.php';

$id    = $_GET['id'] ?? '';
$topic = getVeilleTopicById($id);

if ($topic === null) {
    header('Location: index.php?page=veille');
    exit;
}

require 'app/views/partials/header.php';
require 'app/views/veille-detail.php';
require 'app/views/partials/footer.php';