<?php 
if( !session_id() ) session_start();
define ('SITE_ROOT', realpath(dirname(__FILE__)));

require_once '../app/init.php';

$app = new App;