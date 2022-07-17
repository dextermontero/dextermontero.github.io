<?php
session_start();
date_default_timezone_set('Asia/Manila');
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', __DIR__);

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS);

require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."database.php");

?>