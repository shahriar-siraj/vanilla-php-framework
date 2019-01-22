<?php

/**
 * Database Hostname
 */
define('DB_HOST', 'localhost');

/**
 * Database Name
 */
define('DB_NAME', 'vanilla');

/**
 * Database Username
 */
define('DB_USER', 'root');

/**
 * Database Password
 */
define('DB_PASSWORD', '');

/**
 * Base URL of the site
 * 
 * Note: Place websiite's entry point URL 
 * if it's being hosted from subdirectory in the server
 */
define('BASE_URL', url());

/**
 * Gets BASE URL
 *
 * @return string
 */
function url()
{
    $currentPath = $_SERVER['PHP_SELF'];
    $pathInfo = pathinfo($currentPath);
    $hostName = $_SERVER['HTTP_HOST'];
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    return $protocol.$hostName;
}