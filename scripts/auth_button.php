<?php
include("db_conn.php");

if(isset($_COOKIE['Login']) && ($_COOKIE['PasswordHash'])){
  echo "<script>window.location.href = 'http://de.votkpromtech.ru/adminpanel.html';</script>";
} else {
  setcookie('Login', $LOGIN, time()+3600);
  setcookie('PasswordHash', $PASSWORD, time()+3600);
}