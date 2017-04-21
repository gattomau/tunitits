<?php

use classes\db;
use classes\users;

include 'autoload.php';

include 'template/header.php';

error_reporting(true);
ini_set('display_errors', 1);


$users = new users();

?>

<div class="container">
  <h1>Prenotazioni</h1>
  <table>
    <tr>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Nome</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Cognome</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Club</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Distretto</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Incarichi Club</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Incarichi Distretto</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Incarichi MD</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Details</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Edit</strong></td>
      <td style="padding: 15px; border: 1px solid #000;"><strong>Delete</strong></td>
    </tr>
    <?php if(!isset($_GET['nome'])): ?>
    <?php foreach($users->showUsers() as $user): ?>
      <tr>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Nome'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Cognome'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Club'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Distretto'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['incarichiClub'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['incarichiDist'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['incarichiMDist'] ?></td>
        <td style="padding: 15px; border: 1px solid #000;"><a href="vwUsrDetails.php?id=<?php echo $user['id'] ?>">Details</a></td>
        <td style="padding: 15px; border: 1px solid #000;"><a href="/editUser.php?id=<?php echo $user['id'] ?>">Edit</a></td>
        <td style="padding: 15px; border: 1px solid #000;"><a href="/delUser.php?id=<?php echo $user['id'] ?>">Delete</a></td>
      </tr>
    <?php endforeach ?>
    <?php endif ?>

    <?php if(isset($_GET['nome'])): ?>
    <?php foreach($users->searchUser($_GET['nome']) as $user): ?>
      <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Nome'] ?></td>
      <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Cognome'] ?></td>
      <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Club'] ?></td>
      <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['Distretto'] ?></td>
      <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['incarichiClub'] ?></td>
      <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['incarichiDist'] ?></td>
      <td style="padding: 15px; border: 1px solid #000;"><?php echo $user['incarichiMDist'] ?></td>
      <td style="padding: 15px; border: 1px solid #000;"><a href="/vwUsrDetails.php?id=<?php echo $user['id'] ?>">Details</a></td>
      <td style="padding: 15px; border: 1px solid #000;"><a href="/editUser.php?id=<?php echo $user['id'] ?>">Edit</a></td>
      <td style="padding: 15px; border: 1px solid #000;"><a href="/delUser.php?id=<?php echo $user['id'] ?>">Delete</a></td>
    <?php endforeach ?>
    <?php endif ?>
  </table>

  &nbsp;
  <form class="" action="vwUsers.php" method="get">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input class="form-control" type="text" name="nome" value="" placeholder="nome" required>
    </div>
    <div class="form-group">
      <label for="cognome">Cognome</label>
      <input class="form-control" type="text" name="cognome" value="" placeholder="cognome">
    </div>
    <input class="btn btn-danger" type="submit" name="search" value="Cerca Utente">
  </form>
  <a class="btn btn-info" href="vwUsers.php">Clear Filters</a>
</div>
