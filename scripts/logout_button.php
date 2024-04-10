<?php

//setcookie('Login', '', time()-3600);
//setcookie('PasswordHash', '', time()-3600);

setcookie('Email', '', time() - 3600);
//unset($_COOKIE['Email']);


//session_destroy();
header("Location: http://de.votkpromtech.ru/auth.html");