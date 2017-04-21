<?php

include 'autoload.php';

ini_set('display_errors', 0);

use classes\db;
use classes\users;

// $dbh = new db('t_uniti', 'localhost', 'root', 'maurizio');

$usr = new users();

$db = new db();

$usr->initUsers();

$useradd = $db->dbReady()->prepare("INSERT INTO utenti (Nome, Cognome, dataNascita, luogoNascita, Email, Cellulare, Club, Distretto, incarichiClub, incarichiDist, incarichiMDist, Delegato, Pacchetto, Pernottamento, Gite, mezzoTrasporto, orarioPartenza, orarioArrivo, Allergie, Note, impPagato, cro)
VALUES (:nome, :cognome, :dataNascita, :luogoNascita, :email, :cellulare, :club, :distretto, :incaricoClub, :incaricoDist, :incaricoMDist, :delegato, :pacchetto, :pernottamento, :gite, :mezzotrasporto, :orariopartenza, :orarioarrivo, :allergie, :note, :imppagato, :cro)");

$useradd->bindParam(':nome', $nome);
$useradd->bindParam(':cognome', $cognome);
$useradd->bindParam(':dataNascita', $dataNascita);
$useradd->bindParam(':luogoNascita', $luogoNascita);
$useradd->bindParam(':email', $email);
$useradd->bindParam(':cellulare', $cellulare);
$useradd->bindParam(':club', $club);
$useradd->bindParam(':distretto', $distretto);
$useradd->bindParam(':incaricoClub', $incaricoClub);
$useradd->bindParam(':incaricoDist', $incaricoDist);
$useradd->bindParam(':incaricoMDist', $incaricoMDist);
$useradd->bindParam(':delegato', $delegato);
$useradd->bindParam(':pacchetto', $pacchetto);
$useradd->bindParam(':pernottamento', $pernottamento);
$useradd->bindParam(':gite', $gite);
$useradd->bindParam(':mezzotrasporto', $mezzotrasporto);
$useradd->bindParam(':orariopartenza', $orariopartenza);
$useradd->bindParam(':orarioarrivo', $orarioarrivo);
$useradd->bindParam(':allergie', $allergie);
$useradd->bindParam(':note', $note);
$useradd->bindParam(':imppagato', $imppagato);
$useradd->bindParam(':cro', $cro);

$nome = (!empty($_POST['nome'])) ? $_POST['nome'] : NULL;
$cognome = (!empty($_POST['cognome'])) ? $_POST['cognome'] : NULL;
$dataNascita = (!empty($_POST['dataNascita'])) ? $_POST['dataNascita'] : NULL;
$luogoNascita = (!empty($_POST['luogoNascita'])) ? $_POST['luogoNascita'] : NULL;
$email = (!empty($_POST['email'])) ? $_POST['email'] : NULL;
$cellulare = (!empty($_POST['cellulare'])) ? $_POST['cellulare'] : NULL;
$club = (!empty($_POST['club'])) ? $_POST['club'] : NULL;
$distretto = (!empty($_POST['distretto'])) ? $_POST['distretto'] : NULL;
$incaricoClub = (!empty($_POST['incaricoClub'])) ? $_POST['incaricoClub'] : NULL;
$incaricoDist = (!empty($_POST['incaricoDist'])) ? $_POST['incaricoDist'] : NULL;
$incaricoMDist = (!empty($_POST['incaricoMDist'])) ? $_POST['incaricoMDist'] : NULL;
$delegato = (!empty($_POST['delegato'])) ? $_POST['delegato'] : NULL;
$pacchetto = (!empty($_POST['pacchetto'])) ? $_POST['pacchetto'] : NULL;
$pernottamento = (!empty($_POST['pernottamento'])) ? $_POST['pernottamento'] : NULL;
$gite = (!empty($_POST['gite'])) ? $_POST['gite'] : NULL;
$mezzotrasporto = (!empty($_POST['mezzotrasporto'])) ? $_POST['mezzotrasporto'] : NULL;
$orariopartenza = (!empty($_POST['orariopartenza'])) ? $_POST['orariopartenza'] : '00:00:00';
$orarioarrivo = (!empty($_POST['orarioarrivo'])) ? $_POST['orarioarrivo'] : '00:00:00';
$allergie = (!empty($_POST['allergie'])) ? $_POST['allergie'] : NULL;
$note = (!empty($_POST['note'])) ? $_POST['note'] : NULL;
$imppagato = (!empty($_POST['pacchetto'])) ? $_POST['pacchetto'] : NULL;
$cro = (!empty($_POST['pacchetto'])) ? $_POST['pacchetto'] : NULL;

if(isset($_POST['struka'])) {
  $useradd->execute();
}

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
      <input type="text" name="incaricoDist" value="" placeholder="incaricoDist">
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
      <input type="submit" name="struka" value="Struka!">
    </form>
  </body>
</html>
