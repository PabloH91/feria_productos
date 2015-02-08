<?php
 
define("DB_SERVER", "localhost");
define("DB_USER", "feria");
define("DB_PASS", "1234");
define("DB_NAME", "feria");
// $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if(mysqli_connect_errno()) {
  die("Database connection failed: " . mysqli_connect_error() 
    . " (" . mysqli_connect_errno() . ")");
}

/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 
/*
    Error reporting.
*/
// ini_set("error_reporting", "true");
// error_reporting(E_ALL|E_STRCT);
 
?>