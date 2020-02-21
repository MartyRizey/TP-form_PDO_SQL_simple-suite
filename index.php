<?php

/**
 * https://www.php.net/manual/fr/function.ini-set.php
 * https://www.php.net/manual/fr/errorfunc.configuration.php#ini.display-errors
 */
ini_set('display_errors', true);
// https://www.php.net/manual/fr/function.error-reporting.php
error_reporting(E_ALL);

// require './inc/folderPathConstant.php';
require_once __DIR__ . '/views/home.php';
