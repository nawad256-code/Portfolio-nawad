<?php
$page = 'veille';

require 'app/models/VeilleModel.php';
$veilleTopics = getVeilleTopics();

require 'app/views/partials/header.php';
require 'app/views/veille.php';
require 'app/views/partials/footer.php';