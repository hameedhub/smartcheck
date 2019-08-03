<?php

// loaders
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

// library
require 'libs/Database.php';
require 'libs/Session.php';

//configuration
require 'config/database.php';
require 'config/path.php';

// launch app
$app = new Bootstrap();


?>