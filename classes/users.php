<?php

namespace classes;

class users
{

  public function initUsers() {

    $db = new db();

    $sql = 'CREATE TABLE IF NOT EXISTS utenti (
            id INT NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(id),
            Nome VARCHAR(32),
            Cognome VARCHAR(32),
            dataNascita DATE,
            luogoNascita VARCHAR(64),
            Email VARCHAR(32),
            Cellulare VARCHAR(32),
            Club VARCHAR(64),
            Distretto VARCHAR(32),
            incarichiClub VARCHAR(128),
            incarichiDist VARCHAR(128),
            incarichiMDist VARCHAR(128),
            Delegato BOOLEAN,
            Pacchetto INT(2),
            Pernottamento INT(2),
            Gite INT(2),
            mezzoTrasporto VARCHAR(32),
            orarioPartenza TIME,
            orarioArrivo TIME,
            Allergie VARCHAR(32),
            Note VARCHAR(256),
            impPagato FLOAT(16),
            cro VARCHAR(64)
            ) ENGINE=InnoDB';

            $db->dbReady()->query($sql);

  }

  public function addUser($nome, $cognome, $datanascita, $luogonascita, $email, $cellulare, $club, $distretto, $incarichiclub, $incarichidist, $incarichimdist, $delegato, $pacchetto, $pernottamento, $gite, $mezzotrasporto, $orariopartenza, $orarioarrivo, $allergie, $note, $imppagato, $cro) {

    $db = new db();

    $useradd = "INSERT INTO utenti (Nome, Cognome, dataNascita, luogoNascita, Email, Cellulare, Club, Distretto, incarichiClub, incarichiDist, incarichiMDist, Delegato, Pacchetto, Pernottamento, Gite, mezzoTrasporto, orarioPartenza, orarioArrivo, Allergie, Note, impPagato, cro)
    VALUES ('$nome', '$cognome', '$datanascita', '$luogonascita', '$email', '$cellulare', '$club', '$distretto', '$incarichiclub', '$incarichidist', '$incarichimdist', '$delegato', '$pacchetto', '$pernottamento', '$gite', '$mezzotrasporto', '$orariopartenza', '$orarioarrivo', '$allergie', '$note', '$imppagato', '$cro')";

    $db->dbReady()->query($useradd);
  }

}
