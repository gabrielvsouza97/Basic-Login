<?php
require_once ("Core/DbInfo.php");
define('DOCUMENT_ROOT', "Login/Basic-Login/");

spl_autoload_register(function($fileName)
{
    if(file_exists("Controllers/".$fileName.".php"))
    {
        require_once "Controllers/".$fileName.".php";
    }
    else if(file_exists("Core/".$fileName.".php"))
    {
        require_once "Core/".$fileName.".php";
    }
    else if(file_exists("Models/".$fileName.".php"))
    {
        require_once "Models/".$fileName.".php";
    }
    
});