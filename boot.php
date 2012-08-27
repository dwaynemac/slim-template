<?php 

set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__));

require 'vendor/Slim/Slim.php';
require 'config/avoid_notices.php';

$app = new Slim();

require 'lib/auto_include_lib.php';
require 'app/models.php';
require 'app/helpers.php';
require 'app/routes.php';
require 'app/middlewares.php';
require 'app/hooks.php';

//GET route
$app->get('/', function () {
  echo 'GET /';
});

$app->run();

?>