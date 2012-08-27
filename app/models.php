<?php 

require 'config/orm.php';

foreach (glob(dirname(__FILE__) . "/models/*.php") as $filename)
{
  require $filename;
}

?>