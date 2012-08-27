<?php 
foreach (glob(dirname(__FILE__) . "/hooks/*.php") as $filename)
{
    require $filename;
}

?>