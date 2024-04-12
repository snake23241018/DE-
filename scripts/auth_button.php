<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

include ("db_conn.php");
//var_dump($_COOKIE[]);
//echo ('<br>');
//echo ($_COOKIE['Login']);
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];
// global $RowEmail;
// global $RowPassword;


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

    while ($row = mysqli_fetch_assoc($query)) {
      $RowEmail = $row['EMAIL'];
      $RowPassword = $row['PASSWORD'];
    }
  }
  
  //Доделай сверку!!! ЗДЕСЬ!!!
    if ($query->num_rows > 0 && $EMAIL == $RowEmail && $PASSWORD == $RowPassword) {
      setcookie('Email_Cookie', $RowEmail, time() + 3600);
      setcookie('Login_Cookie', $RowEmail, time() + 3600);
      setcookie('Password_Cookie', $RowEmail, time() + 3600);
      setcookie('Email_Cookie', $RowEmail, time() + 3600);
      setcookie('Email_Cookie', $RowEmail, time() + 3600);
      
      echo $RowEmail;
      echo "<br>";
      echo $EMAIL;
      echo "<br>";
      echo $RowPassword;
      echo "<br>";
      echo $PASSWORD;
      echo "<br>";
      
    } else {
      echo "<script>alert('Неверно указан логин или пароль!');
      window.location.href = 'http://de.votkpromtech.ru/auth.html';</script>";

    }
    echo '<br><a href="/scripts/logout_button.php">Destroy cookie</a>';
    //echo "<script>window.location.href = 'http://de.votkpromtech.ru/auth.html';</script>";
} else {
  echo "<script>alert('Ошибка соединения')</script>";


  // echo "5 polzovatel' vozmozhno est'";
  // echo ($mysqli_query);
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