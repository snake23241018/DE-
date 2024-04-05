<?php

setcookie("type", "", time()-3600);
header("Location: http://de.votkpromtech.ru/auth.html");