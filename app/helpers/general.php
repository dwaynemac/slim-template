<?php 

// finds value for $name in request parameters or given array (priority to given array)
function find_param($app,$route_params,$name){
  if (isset($route_params[$name]))
    return $route_params[$name];
  else
    return $app->request()->params($name);
}

?>