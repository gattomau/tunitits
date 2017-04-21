<?php

namespace classes;

class users
{

  public function showUsers() {

    $db = new db();

    $sql = 'SELECT * FROM utenti';

      $userArk = $db->dbReady()->query($sql);

      return $userArk;

  }

  public function searchUser($nome) {

    $db = new db();

    if(isset($nome)) {
      $sql = "SELECT * FROM utenti WHERE Nome='$nome'";

      $resUser = $db->dbReady()->query($sql);

      return $resUser;
    }

  }

  public function usrDetails($id) {

    $db = new db();

    $sql = "SELECT * FROM utenti JOIN pacchetti ON utenti.Pacchetto = pacchetti.id WHERE utenti.id='$id'";

    $usrDetails = $db->dbReady()->query($sql);

    return $usrDetails;
  }

}
