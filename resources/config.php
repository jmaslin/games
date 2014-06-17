<?php

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

defined("DATA_PATH")
    or define("DATA_PATH", realpath(dirname(__FILE__) . '/db'));

define('SITE_NAME', "Site Name");

?>