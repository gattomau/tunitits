<?php

session_start();

include 'autoload.php';

use classes\db;
use classes\users;

if(isset($_POST['submit'])) {
  if(empty($_POST['username']) || empty($_POST['password'])) {
    echo "Username or Password are invalid!";
  }
}

if(isset($_SESSION['username'])) {
  header('location: index.php');
}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$username = stripslashes($username);
$password = stripslashes($password);

$db = new db();

$sql = "SELECT username, password FROM registered_users WHERE username = '$username' AND password = MD5('$password')";

$result = array();

foreach($db->dbReady()->query($sql) as $res) {
  array_push($result, $res);
}

if(!empty($result)) {
  print_r($result);
  $_SESSION['username'] = $result[0]['username'];
  header('location: index.php');
} else {
  echo 'Wrong login data!';
}

?>

<form class="" action="login.php" method="post">
  <input type="text" name="username" value="">
  <input type="password" name="password" value="">
  <input type="email" name="email" value="">
  <input type="submit" name="submit" value="Strukimelo!">
</form>
