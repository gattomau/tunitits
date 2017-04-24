<?php

use classes\db;
use classes\users;

use OTPHP\TOTP;

error_reporting(E_ALL);
ini_set('display_errors', 1);

// include 'vendor/autoload.php';

include 'autoload.php';

include 'template/header.php';

// $totp = new TOTP("mauriziozeleznik@gmail.com", '5DNRAQ2Y64HPXYTFRCTUTHJAOKREHZAYO5XMYHGANILI6AQHMDHA', 30, 'sha512', 8);

// $totp->setIssuer('T Uniti');
//
// echo $totp->getProvisioningUri();

// echo $totp->now();

?>

<div class="container" style="text-align: center;">
  <h1>Area Prenotazione</h1>
</div>
