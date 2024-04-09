<?php

//setcookie('Login', '', time()-3600);
//setcookie('PasswordHash', '', time()-3600);

session_destroy();

header("Location: http://de.votkpromtech.ru/auth.html");