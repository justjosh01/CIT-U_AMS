<?php

session_start();
ob_start();
date_default_timezone_set('Etc/GMT-8');


$chop = -strlen(basename($_SERVER['SCRIPT_NAME']));

define('DOC_ROOT',substr($_SERVER['SCRIPT_FILENAME'],0,$chop));
define('URL_ROOT',substr($_SERVER['SCRIPT_NAME'],0,$chop));

define('URL','http://' . $_SERVER['HTTP_HOST'] . URL_ROOT);

 