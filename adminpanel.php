<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
</head>
<body>
    <div class="ap_header">
        <h2>
            ADMINPANEL is here!
        </h2>
        <h3>
            <?php echo $_COOKIE['Email_Cookie']; ?>
        </h3>
    </div>
    <div class="logout_button">
        <a href="http://de.votkpromtech.ru/scripts/logout_button.php">Выйти</a>
    </div>
</body>
</html>