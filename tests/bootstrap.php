<?php
//
error_reporting(E_ALL);
ini_set('display_errors', 1);

//
set_include_path('/var/www/html');

require_once 'config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'includes/runtime/Controller.php';
require_once 'modules/Vtiger/views/Header.php';
require_once 'modules/Vtiger/views/Footer.php';
require_once 'modules/Vtiger/views/Basic.php';
require_once 'modules/Vtiger/views/Index.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

/*

set_global_var('dbconfig', $dbconfig);

require_once 'include/database/PearDatabase.php';
set_global_var('log', $log);

require_once 'include/utils/utils.php';

require_once __DIR__.'/../vendor/autoload.php';
*/
