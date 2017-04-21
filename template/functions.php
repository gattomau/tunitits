<?php

define('ROOT', dirname(__DIR__));
define('CURDIR', dirname($_SERVER['SCRIPT_NAME']));

function includeJs() {
  if(is_dir(ROOT . '/assets/js')) {
    $jsdir = scandir(ROOT . '/assets/js');
    foreach($jsdir as $dir) {
      if($dir !== '.' && $dir !== '..') {
        echo "<script src=\"" . CURDIR . "/assets/js/$dir\"></script>\r\n";
      }
    }
  }
}

function includeCss() {
  if(is_dir(ROOT . '/assets/css')) {
    $cssdir = scandir(ROOT . '/assets/css');
    foreach($cssdir as $dir) {
      if($dir !== '.' && $dir !== '..') {
        echo "<link rel=\"stylesheet\" href=\"" . CURDIR . "/assets/css/$dir\">\r\n";
      }
    }
  }
}
