<?php

use classes\db;
use classes\users;

include 'autoload.php';

include 'template/header.php';

error_reporting(true);
ini_set('display_errors', 1);


$users = new users();

?>

<div class="container" style="text-align: center">
  <h1>Dettagli Utente</h1>
  <table>
    <tr>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Nome</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Cognome</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Club</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Distretto</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Incarichi Club</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Incarichi Distretto</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Incarichi MD</strong></td>
    </tr>
    <?php if(isset($_GET['id'])): ?>
    <?php foreach($users->usrDetails($_GET['id']) as $user): ?>
      <tr>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Nome'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Cognome'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Club'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Distretto'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['incarichiClub'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['incarichiDist'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['incarichiMDist'] ?></td>

      </tr>
    <?php endforeach ?>
    <?php endif ?>
    </table>

    <h1>Dettagli Prenotazione</h1>

    <table>
      <tr>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Delegato</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Pacchetto</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Pernottamento</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Gite</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Mezzo di Trasporto</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Nr. Treno</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Partenza</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Arrivo</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Allergie</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Note</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>Pagato</strong></td>
        <td style="padding: 15px; border: 1px solid #000;"><strong>CRO</strong></td>
      </tr>
      <?php if(isset($_GET['id'])): ?>
      <?php foreach($users->usrDetails($_GET['id']) as $user): ?>
      <tr>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Delegato'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Titolo'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Pernottamento'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Gite'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['mezzoTrasporto'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['numTreno'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['orarioPartenza'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['orarioArrivo'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Allergie'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Note'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['impPagato'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['cro'] ?></td>
      </tr>
    <?php endforeach ?>
  <?php endif ?>
    </table>

    <?php if(!isset($_GET['id'])): ?>
      <h1>Utente non specificato!</h1>
    <?php endif ?>
</div>
