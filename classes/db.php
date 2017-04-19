<?php

namespace classes;

use \PDO;

class db
{
  private $db;
  private $dbname = 't_uniti';
  private $dbhost = 'localhost';
  private $dbuser = 'root';
  private $dbpass = 'maurizio';

  public function connect() {
    $conn = NULL;

    try
    {
        $conn = new PDO('mysql:dbname=' . $this->dbname . ';host=' . $this->dbhost, $this->dbuser, $this->dbpass);
    } catch (PDOException $e) {
      echo "<h1>Failed to connect to the specified database: " . $e->getMessage() . '</h1>';
    }

    $this->db = $conn;
  }

  public function dbReady() {
    if(!$this->db) {
      $this->connect();
      return $this->db;
    } else {
      return $this->db;
    }
  }
}
