<?php
$page = 'stages';

require 'app/models/StageModel.php';
require 'app/models/MissionModel.php';
$stages   = getStages();
$missions = getMissions();

require 'app/views/partials/header.php';
require 'app/views/stages.php';
require 'app/views/partials/footer.php';