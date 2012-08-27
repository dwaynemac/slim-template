<?php 
require 'config/security.php';

/* Request should come through ssl */
if(__DEMAND_SSL__) {
  $app->hook('slim.before.router', function() use ($app) {
    $env = $app->environment();
    if ($env['slim.url_scheme'] != 'https') {
      echo "Access through https";
      $app->stop();
    }
  },1);
}

$app->hook('slim.before.dispatch',function () use ($app){
  $api_key = $app->request()->params('api_key');
  if($api_key != API_KEY){
    echo "Access denied.";
    $app->stop();
  }
},1);

?>