<?php

//setcookie('Login', '', time()-3600);
//setcookie('PasswordHash', '', time()-3600);

setcookie('Email_Cookie', $RowEmail, time() - 3600, '');
setcookie('Login_Cookie', $RowLogin, time() - 3600, '');
setcookie('Password_Cookie', $RowPassword, time() - 3600, '');
setcookie('FIO_Cookie', $RowFIO, time() - 3600, '');
setcookie('Phone_Cookie', $RowPhone, time() - 3600, '');
setcookie('Role_Cookie', $RowRole, time() - 3600, '');
//unset($_COOKIE['Email']);


//session_destroy();
header("Location: http://de.votkpromtech.ru/auth.html");