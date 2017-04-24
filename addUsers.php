<?php

include 'autoload.php';

include 'template/header.php';

ini_set('display_errors', 0);

use classes\db;
use classes\users;

// $dbh = new db('t_uniti', 'localhost', 'root', 'maurizio');

$usr = new users();

$db = new db();

$usr->initUsers();

$useradd = $db->dbReady()->prepare("INSERT INTO utenti (Nome, Cognome, dataNascita, luogoNascita, Email, Cellulare, Club, Distretto, incarichiClub, incarichiDist, incarichiMDist, Delegato, Pacchetto, Pernottamento, Gite, mezzoTrasporto, numTreno, orarioPartenza, orarioArrivo, Allergie, Note, impPagato, cro)
VALUES (:nome, :cognome, :dataNascita, :luogoNascita, :email, :cellulare, :club, :distretto, :incaricoClub, :incaricoDist, :incaricoMDist, :delegato, :pacchetto, :pernottamento, :gite, :mezzotrasporto, :numTreno, :orariopartenza, :orarioarrivo, :allergie, :note, :imppagato, :cro)");

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
$useradd->bindParam(':numTreno', $numTreno);
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
$numTreno = (!empty($_POST['numTreno'])) ? $_POST['numTreno'] : NULL;
$orariopartenza = (!empty($_POST['orariopartenza'])) ? $_POST['orariopartenza'] : NULL;
$orarioarrivo = (!empty($_POST['orarioarrivo'])) ? $_POST['orarioarrivo'] : NULL;
$allergie = (!empty($_POST['allergie'])) ? $_POST['allergie'] : NULL;
$note = (!empty($_POST['note'])) ? $_POST['note'] : NULL;
$imppagato = (!empty($_POST['pacchetto'])) ? $_POST['pacchetto'] : NULL;
$cro = (!empty($_POST['pacchetto'])) ? $_POST['pacchetto'] : NULL;

if(isset($_POST['send'])) {
  $useradd->execute();
}

?>

  <div class="container">
    <h1>Prenotazione</h1>
    <form class="" action="addUsers.php" method="post">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" value="" placeholder="nome">
      </div>
      <div class="form-group">
        <label for="cognome">Cognome</label>
        <input class="form-control" type="text" name="cognome" value="" placeholder="cognome">
      </div>
        <div class="form-group">
          <div class="input-group date" id="pickdata1">
            <label for="dataNascita">Data di Nascita</label>
            <input class="form-control" type="text" name="dataNascita" value="" placeholder="dataNascita">
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
      </div>
      <div class="form-group">
        <label for="luogoNascita">Luogo di Nascita</label>
        <input class="form-control" type="text" name="luogoNascita" value="" placeholder="luogoNascita">
      </div>
      <div class="form-group">
        <label for="email">E-Mail</label>
        <input class="form-control" type="email" name="email" value="" placeholder="email">
      </div>
      <div class="form-group">
        <label for="cellulare">Nr. Cellulare</label>
        <input class="form-control" type="text" name="cellulare" value="" placeholder="cellulare">
      </div>
      <div class="form-group">
        <label for="club">Club</label>
        <input class="form-control" type="text" name="club" value="" placeholder="club">
      </div>
      <div class="">
        <label for="distretto">Distretto</label>
        <input class="form-control" type="text" name="distretto" value="" placeholder="distretto">
      </div>
      <div class="form-group">
        <label for="incaricoClub">Incarichi di Club</label>
        <input class="form-control" type="text" name="incaricoClub" value="" placeholder="incaricoClub">
      </div>
      <div class="form-group">
        <label for="incaricoDist">Incarichi di Distretto</label>
        <input class="form-control" type="text" name="incaricoDist" value="" placeholder="incaricoDist">
      </div>
      <div class="form-group">
        <label for="incaricoMDist">Incarichi di Multidistretto</label>
        <input class="form-control" type="text" name="incaricoMDist" value="" placeholder="incaricoMDist">
      </div>
      <div class="form-group">
        <label for="delegato">Delegato</label>
        <select class="form-control" name="delegato">
          <option value="1">Si</option>
          <option value="0" selected>No</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pacchetto"></label>
        <select class="form-control" name="pacchetto">
          <option value="" selected>---</option>
          <option value="1">Pacchetto Full (E. 120,00)</option>
          <option value="2">Pacchetto Middle (E. 100,00)</option>
          <option value="3">Pacchetto Small (E. 80,00)</option>
          <option value="4">Pacchetto XSmall (E. 40,00)</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pernottamento">Pernottamento</label>
        <select class="form-control" name="pernottamento">
          <option value="" selected>---</option>
          <option value="1">Camera Singola (E. +30,00)</option>
          <option value="2">Camera Doppia</option>
        </select>
      </div>
      <div class="form-group">
        <label for="gite">Gite</label>
        <select class="form-control" name="gite">
          <option value="" selected>---</option>
          <option value="1">Gita in Osmizza (E. 15,00)</option>
          <option value="2">I Caffe` di Trieste (E. 15,00)</option>
        </select>
      </div>
      <div class="form-group">
        <label for="mezzotrasporto">Mezzo di Trasporto</label>
        <input class="form-control" type="text" name="mezzotrasporto" value="" placeholder="mezzotrasporto">
      </div>
      <div class="form-group">
        <label for="numTreno">Numero del Treno</label>
        <input class="form-control" type="text" name="numTreno" value="" placeholder="numTreno">
      </div>
      <div class="form-group">
        <label for="orariopartenza">Orario di Partenza</label>
        <input class="form-control" type="text" name="orariopartenza" value="" placeholder="orariopartenza">
      </div>
      <div class="form-group">
        <label for="orarioarrivo">Orario di Arrivo</label>
        <input class="form-control" type="text" name="orarioarrivo" value="" placeholder="orarioarrivo">
      </div>
      <div class="form-group">
        <label for="allergie">Allergie Alimentari</label>
        <input class="form-control" type="text" name="allergie" value="" placeholder="allergie">
      </div>
      <div class="form-group">
        <label for="note">Note Aggiuntive</label>
        <input class="form-control" type="text" name="note" value="" placeholder="note">
      </div>
      <div class="form-group">
        <label for="imppagato">Importo Pagato</label>
        <input class="form-control" type="text" name="imppagato" value="" placeholder="imppagato">
      </div>
      <div class="form-group">
        <label for="cro">C.R.O.</label>
        <input class="form-control" type="text" name="cro" value="" placeholder="cro">
      </div>
      <input class="form-control btn-danger" type="submit" name="send" value="Invia Prenotazione">
    </form>
  </div>
  <script charset="utf-8">
          $(function () {
              $('#pickdata1').datetimepicker();
          });
  </script>
  <?php include 'template/footer.php' ?>
