<?php
$page = 'documents';

require 'app/models/DocumentModel.php';
$documents = getDocuments();

require 'app/views/partials/header.php';
require 'app/views/documents.php';
require 'app/views/partials/footer.php';