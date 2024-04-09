<?php
include("db_conn.php");

$LOGIN = $_POST["email"];
$PASSWORD = $_POST["password"];

//if (){}

if (isset($_COOKIE['Login']) && isset($_COOKIE['PasswordHash'])){
  echo "<script>window.location.href = 'http://de.votkpromtech.ru/adminpanel.html';</script>";
} else {
  setcookie('Email', '$_POST["email"]', time()+3600);
  setcookie('PasswordHash', '$_POST["password"]', time()+3600);

}