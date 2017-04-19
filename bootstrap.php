<?php

use classes\db;

include 'autoload.php';

define('DBNAME', 't_uniti');
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'maurizio');

$db = new db(DBNAME, DBHOST, DBUSER, DBPASS);
