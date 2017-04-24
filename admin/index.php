<?php

session_start();

use classes\db;
use classes\users;

include 'autoload.php';

include 'template/header.php';

?>

<div class="container" style="text-align: center;">
  <h1>Area Admin</h1>
  <h2><?php print_r($_SESSION['username']) ?></h2>
</div>
