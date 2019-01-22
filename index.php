<?php 

/**
 * Autoload Classes
 */
require 'vendor/autoload.php';

/**
 * Require routes file
 */
require 'app/routes.php';

/**
 * Require configuration file
 */
require 'app/config.php';

/**
 * Handle routes from Route helper class
 */
use App\Helpers\Route;

Route::handle($_SERVER['PHP_SELF']);