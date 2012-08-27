<?php 

foreach (glob(dirname(__FILE__) . "/middlewares/*.php") as $filename)
{
    require $filename;
}

?>