<?php 
foreach (glob(dirname(__FILE__) . "/helpers/*.php") as $filename)
{
    require $filename;
}

?>