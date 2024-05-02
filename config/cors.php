<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, Authorization, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: *");
header("Allow: *");

error_reporting(E_ALL); 
ini_set('ignore_repeated_errors', TRUE); 
ini_set('display_errors', FALSE); 
ini_set('log_errors', TRUE); 
ini_set("error_log", "php-error.log");

?>

