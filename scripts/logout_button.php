<?php
// session_start();
setcookie("Email_Cookie", "", time() - 3600, "/", "de.votkpromtech.ru", true, false);

// setcookie('Login_Cookie', $_SESSION['Login'], time() - 3600, '');
// setcookie('Password_Cookie', $_SESSION['Password'], time() - 3600, '');
// setcookie('FIO_Cookie', $_SESSION['FIO'], time() - 3600, '');
// setcookie('Phone_Cookie', $_SESSION['Phone'], time() - 3600, '');
// setcookie('Role_Cookie', $_SESSION['Role'], time() - 3600, '');
//unset($_COOKIE['Email']);

session_unset();
// session_destroy();
// echo "<script>window.location.href = 'http://de.votkpromtech.ru/auth.html';</script>";
