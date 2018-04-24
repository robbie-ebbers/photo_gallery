<?php

// define the core paths
// define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a php pre-defined constant
// (\ for windows, \ for Unix

defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);
    define('SITE_ROOT','C:'.DS.'xampp'.DS.'htdocs'.DS.'php' .DS. 'Periode 3 leerjaar 1' .DS. 'photo_gallery');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS. 'includes');

// Load config file first
require_once(LIB_PATH.DS."config.php");

// Load basic functions next so that everything after can use them
require_once(LIB_PATH.DS."functions.php");

// Load Core Objects
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");
require_once(LIB_PATH.DS."pagination.php");

// Load database-related classes
require_once(LIB_PATH.DS."user.php");
require_once(LIB_PATH.DS."photograph.php");
require_once(LIB_PATH.DS."comment.php");














?>