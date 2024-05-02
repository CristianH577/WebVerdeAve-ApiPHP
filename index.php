<?php
require_once 'config/cors.php';
require_once 'config/config.php';

error_log( "------------------------------------------------------ ------------------------------------------------------ ------------------------------------------------------" );
error_log( "Start Web" );

require_once 'libs/controller.php';
require_once 'libs/database.php';
require_once 'libs/model.php';
require_once 'libs/app.php';

$app = new App();
?>