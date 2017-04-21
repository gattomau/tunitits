<?php

namespace classes;

// Defining Directories
define('ROOT', dirname(__DIR__));
define('CURDIR', dirname(__FILE__));

// Defining Database Init Data
define('DBNAME', 't_uniti');
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'maurizio');

class bootstrap
{
  public static function init()
  {
    $db = new db(DBNAME, DBHOST, DBUSER, DBPASS);
  }
}
