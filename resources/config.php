<?php

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

defined("DATA_PATH")
    or define("DATA_PATH", realpath(dirname(__FILE__) . '/db'));

define('SITE_NAME', "Site Name");

define("JAR_DIR", realpath(dirname(__FILE__) . '/jars'));

$GLOBALS['USERNAME'] = "user";
$GLOBALS['PASSWORD'] = "1a1dc91c907325c69271ddf0c944bc72";


?>