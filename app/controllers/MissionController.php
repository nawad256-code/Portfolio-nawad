<?php
$page = 'mission';

require 'app/models/MissionModel.php';

$id      = $_GET['id'] ?? '';
$mission = getMissionById($id);

if ($mission === null) {
    header('Location: index.php?page=stages');
    exit;
}

require 'app/views/partials/header.php';
require 'app/views/mission-detail.php';
require 'app/views/partials/footer.php';