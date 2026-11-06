<?php
$page = 'projets';

require 'app/models/ProjetModel.php';
$projets = getProjets();

require 'app/views/partials/header.php';
require 'app/views/projets.php';
require 'app/views/partials/footer.php';