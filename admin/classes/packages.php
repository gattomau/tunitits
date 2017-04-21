<?php

namespace classes;

class packages
{

  public function initPackages() {

    $db = new db();

    $sql = 'CREATE TABLE IF NOT EXISTS pacchetti (
            id INT NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(id),
            Titolo VARCHAR(32),
            Prezzo FLOAT(16)
            ) ENGINE=InnoDB';

            $db->dbReady()->query($sql);

  }

  public function showPackages() {

    $db = new db();

    $sql = 'SELECT * FROM pacchetti';

      $packageArk = $db->dbReady()->query($sql);

      return $packageArk;

  }

}
