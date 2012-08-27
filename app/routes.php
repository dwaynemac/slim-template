<?php 

foreach (glob(dirname(__FILE__) . "/routes/*.php") as $filename)
{
    require $filename;
}

?>