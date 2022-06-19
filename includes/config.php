<?php
/*
config.php

Used to store all PHP setup code

*/

//prevents data from being sent early
ob_start();

//enables page to recognize current URL
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Home - Billable Ours";
    break;
        
    case 'about.php':
        $title = "About - Billable Ours";
    break; 
        
    case 'login.php':
        $title = "Login - Billable Ours";
    break;    

    default:
        $title = THIS_PAGE;
}


$contractor = new stdClass;
$contractor->Name = 'John';
$contractor->Password = 'john123';
$contractors[] = $contractor;

$contractor = new stdClass;
$contractor->Name = 'Gina';
$contractor->Password = 'gina123';
$contractors[] = $contractor;

$contractor = new stdClass;
$contractor->Name = 'Terry';
$contractor->Password = 'terry123';
$contractors[] = $contractor;
$contractor = new stdClass;
$contractor->Name = 'rseyum';
$contractor->Password = 'admin123';
$contractors[] = $contractor;

?>
