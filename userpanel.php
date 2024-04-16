<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPanel</title>
        
</head>
<body>
    <div class="up_header">
        <h2>
            USERPANEL is here!
        </h2>
        <h3>
            <!-- Выведи данные пользователя -->
            <?php echo $_COOKIE['Email_Cookie']; ?>
        </h3>
    </div>
    <div class="logout_button">
        <a href="http://de.votkpromtech.ru/scripts/logout_button.php">Выйти</a>
    </div>
</body>
</html>