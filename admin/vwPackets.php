<?php

use classes\db;
use classes\packages;

include 'autoload.php';

include 'template/header.php';

error_reporting(true);
ini_set('display_errors', 1);


$packages = new packages();

?>

<div class="container">
  <h1>Pacchetti</h1>
  <table>
    <tr>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Titolo</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Prezzo</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Dettagli</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Modifica</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Elimina</strong></td>
    </tr>
    <?php foreach($packages->showPackages() as $package): ?>
      <tr>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $package['Titolo'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $package['Prezzo'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><a href="vwPakDetails.php?id=<?php echo $package['id'] ?>">Dettagli</a></td>
        <td style="padding: 15px; border: 1px solid #000;"><a href="/editPackage.php?id=<?php echo $package['id'] ?>">Modifica</a></td>
        <td style="padding: 15px; border: 1px solid #000;"><a href="/delPackage.php?id=<?php echo $package['id'] ?>">Elimina</a></td>
      </tr>
    <?php endforeach ?>
  </table>
