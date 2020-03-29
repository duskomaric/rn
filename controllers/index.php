<?php

$clients = $app['database']->selectAll('clients');

require 'views/index.view.php';