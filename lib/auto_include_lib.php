<?php 
foreach (glob(dirname(__FILE__) . "/*.php") as $filename) {
  if ($filename != __FILE__)
    require $filename;
}

?>