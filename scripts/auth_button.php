<?php
// error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

include ("db_conn.php");

$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];


if ($conn->connect_error) {
  // delete "conn_error" after debug
  // echo "<script>alert('Ne udalos` podkluchit`sya k DB');</script>"
  die("Connection failed: " . $conn->connect_error);

} elseif ($conn) {

  if (isset($_COOKIE['Email_Cookie']) && $_COOKIE['Role_Cookie'] == 'admin') {
    echo "<script>window.location.href = 'http://de.votkpromtech.ru/adminpanel.php';</script>";
  } elseif (isset($_COOKIE['Email_Cookie']) && $_COOKIE['Role_Cookie'] == 'user') {
    echo "<script>window.location.href = 'http://de.votkpromtech.ru/userpanel.php';</script>";
  } elseif (!(isset($_COOKIE['Email_Cookie']))) {

    //проверка на наличие почты в БД
    $query = $conn->query("SELECT * FROM users_table WHERE EMAIL = '$EMAIL'");
    //echo ($query['PASSWORD']);

    while ($row = mysqli_fetch_assoc($query)) {
      $_COOKIE['Email'] = $row['EMAIL'];
      $_COOKIE['Login'] = $row['LOGIN'];
      $_COOKIE['Password'] = $row['PASSWORD'];
      $_COOKIE['FIO'] = $row['FIO'];
      $_COOKIE['Phone'] = $row['PHONE'];
      $_COOKIE['Role'] = $row['ROLE'];
    }

    // echo $_SESSION['Email'];
    // echo $_SESSION['Login'];
    // echo $_SESSION['FIO'];
    // echo $_SESSION['Role'];


  }
  
  //Доделай куки, перепроверь!!! ЗДЕСЬ!!!
  //Распаралель условие для ролей "User" и "Admin"!!!
    if ($query->num_rows > 0 && $EMAIL == $_COOKIE['Email'] && $PASSWORD == $_COOKIE['Password']) {
      setcookie("Email_Cookie", $_COOKIE['Email'], time() + 3600, "/", "de.votkpromtech.ru", true, false);
      setcookie("Login_Cookie", $_COOKIE['Login'], time() + 3600, "/", "de.votkpromtech.ru", true, false);
      setcookie("Password_Cookie", $_COOKIE['Password'], time() + 3600, "/", "de.votkpromtech.ru", true, false);
      setcookie("FIO_Cookie", $_COOKIE['FIO'], time() + 3600, "/", "de.votkpromtech.ru", true, false);
      setcookie("Phone_Cookie", $_COOKIE['Phone'], time() + 3600, "/", "de.votkpromtech.ru", true, false);
      setcookie("Role_Cookie", $_COOKIE['Role'], time() + 3600, "/", "de.votkpromtech.ru", true, false);
            
      echo "<script>window.location.href = 'http://de.votkpromtech.ru/userpanel.php';</script>";
      
    } else {
      echo "<script>alert('Неверно указан логин или пароль!');
      window.location.href = 'http://de.votkpromtech.ru/auth.php';</script>";

    }
    // var_dump ($_SESSION['Email']);
    echo '<br><a href="/scripts/logout_button.php">Destrsoy cookie</a>';
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


/*

$LOGIN = $_POST["email"];
$PASSWORD = $_POST["password"];


if (isset($_COOKIE['Login']) && isset($_COOKIE['PasswordHash'])){
  echo "<script>window.location.href = 'http://de.votkpromtech.ru/adminpanel.html';</script>";
} else {
  setcookie('Email', '$_POST["email"]', time()+3600);
  setcookie('PasswordHash', '$_POST["password"]', time()+3600);

}*/