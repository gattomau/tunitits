<?php

include 'autoload.php';

ini_set('display_errors', 1);

use classes\db;
use classes\users;

// $dbh = new db('t_uniti', 'localhost', 'root', 'maurizio');

$usr = new users();

$usr->initUsers();

$usr->addUser($_POST['nome'], $_POST['cognome'], $_POST['dataNascita'], $_POST['luogoNascita'], $_POST['email'], $_POST['cellulare'], $_POST['club'], $_POST['distretto'], $_POST['incaricoClub'], $_POST['incaricoDist'], $_POST['incaricoMDist'], $_POST['delegato'], $_POST['pacchetto'], $_POST['pernottamento'], $_POST['gite'], $_POST['mezzotrasporto'], $_POST['orariopartenza'], $_POST['orarioarrivo'], $_POST['allergie'], $_POST['note'], $_POST['imppagato'], $_POST['cro']);

// public function addUser($nome, $cognome, $datanascita, $luogonascita, $email, $cellulare, $club, $distretto, $incarichiclub, $incarichidist, $incarichimdist, $delegato, $pacchetto, $gite, $mezzotrasporto, $orariopartenza, $orarioarrivo, $allergie, $note, $imppagato, $cro)

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <input type="text" name="nome" value="" placeholder="nome">
      <input type="text" name="cognome" value="" placeholder="cognome">
      <input type="text" name="dataNascita" value="" placeholder="dataNascita">
      <input type="text" name="luogoNascita" value="" placeholder="luogoNascita">
      <input type="email" name="email" value="" placeholder="email">
      <input type="text" name="cellulare" value="" placeholder="cellulare">
      <input type="text" name="club" value="" placeholder="club">
      <input type="text" name="distretto" value="" placeholder="distretto">
      <input type="text" name="incaricoClub" value="" placeholder="incaricoClub">
      <input type="number" name="incaricoDist" value="" placeholder="incaricoDist">
      <input type="text" name="incaricoMDist" value="" placeholder="incaricoMDist">
      <input type="checkbox" name="delegato" value="1">
      <input type="text" name="pacchetto" value="" placeholder="pacchetto">
      <input type="text" name="pernottamento" value="" placeholder="pernottamento">
      <input type="text" name="gite" value="" placeholder="gite">
      <input type="text" name="mezzotrasporto" value="" placeholder="mezzotrasporto">
      <input type="text" name="orariopartenza" value="" placeholder="orariopartenza">
      <input type="text" name="orarioarrivo" value="" placeholder="orarioarrivo">
      <input type="text" name="allergie" value="" placeholder="allergie">
      <input type="text" name="note" value="" placeholder="note">
      <input type="text" name="imppagato" value="" placeholder="imppagato">
      <input type="text" name="cro" value="" placeholder="cro">
      <input type="submit" name="" value="Struka!">
    </form>
  </body>
</html>
