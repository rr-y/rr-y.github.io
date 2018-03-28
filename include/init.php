<?php


/*
 --------------------------------------
        Session Start
 --------------------------------------
*/


ob_start();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else
    {
        session_destroy();
        
    }


include("common.php");
include("function.php");




 ?>
