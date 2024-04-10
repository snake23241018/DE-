<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

include ("db_conn.php");
//var_dump($_COOKIE[]);
//echo ('<br>');
//echo ($_COOKIE['Login']);
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];


if ($conn->connect_error) {
  // delete "conn_error" after debug
  // echo "<script>alert('Ne udalos` podkluchit`sya k DB');</script>"
  die("Connection failed: " . $conn->connect_error);
  
} elseif ($conn) {
  
  if (isset($_COOKIE['Email']) && $_COOKIE['Role'] = 'admin') {
    
    echo "1";
    //echo "<script>window.location.href = 'http://de.votkpromtech.ru/adminpanel.html';</script>";
  } elseif (isset($_COOKIE['Email']) && $_COOKIE['Role'] = 'user') {

    echo "2";
    //echo "<script>window.location.href = 'http://de.votkpromtech.ru/userpanel.html';</script>";
  } elseif (!(isset($_COOKIE['Email']))) {

    //проверка на наличие почты в БД
    $query = $conn->query("SELECT * FROM users_table WHERE EMAIL = '$EMAIL'");
    //echo ($query['PASSWORD']);
    
    
    
    //Доделай сверку!!! ЗДЕСЬ!!!

    if ($query->num_rows > 0) {
      //query['PAS'] = 1;
    }


    // $mysqli_query = "SELECT * FROM users_table WHERE EMAIL = '$EMAIL'";
    var_dump ($query);
    echo '<br><a href="/scripts/logout_button.php">Destroy cookie</a>';
    //echo "3";
    //echo "0000";
    //echo "<script>window.location.href = 'http://de.votkpromtech.ru/auth.html';</script>";
  }
} else {
  
  

  echo "5 polzovatel' vozmozhno est'";
  echo ($mysqli_query);
  echo '<a href="/scripts/logout_button.php">Destroy cookie</a>';


echo "6 krit oshibka";
echo ($mysqli_query);
echo '<a href="/scripts/logout_button.php">Destroy cookie</a>';

}




//setcookie('Email', $_POST['email'], time() + 3600);
//var_dump($_COOKIE['email']);



/*

$LOGIN = $_POST["email"];
$PASSWORD = $_POST["password"];


if (isset($_COOKIE['Login']) && isset($_COOKIE['PasswordHash'])){
  echo "<script>window.location.href = 'http://de.votkpromtech.ru/adminpanel.html';</script>";
} else {
  setcookie('Email', '$_POST["email"]', time()+3600);
  setcookie('PasswordHash', '$_POST["password"]', time()+3600);

}*/