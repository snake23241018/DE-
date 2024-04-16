<?php
//////////////////////////////////////////////////////
///SDELAI EKRANIROVANIE mysqli_real_escape_string()///
////////////////////////////////////////////////////////////////////
///RAZDELI INFORMACIU O BAZE DANNIH I REGISTRACIU NA RAZNIE FAILI///
////////////////////////////////////////////////////////////////////




include ("db_conn.php");
//check fields "is set"
if (isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["FIO"]) && isset($_POST["phone"])) {
    $EMAIL = $_POST["email"];
    $LOGIN = $_POST["login"];
    $PASSWORD = $_POST["password"];
    $FIO = $_POST["FIO"];
    $PHONE = $_POST["phone"];



    //insert parameters into db, else print "error"
    if ($conn->connect_error) {
        // delete "conn_error" after debug
        // echo "<script>alert('Ne udalos` podkluchit`sya k DB');</script>"
        die("Connection failed: " . $conn->connect_error);
    } elseif ($conn) {

        $query = $conn->query("INSERT INTO users_table (EMAIL, LOGIN, PASSWORD, FIO, PHONE) VALUES ('$EMAIL', '$LOGIN', '$PASSWORD', '$FIO', '$PHONE')");
        //?????chini zdes'?????


        echo "<script>alert('Вы успешно зарегистрировались. Сейчас Вы будете автоматически перенаправлены на страницу входа...');   window.location.href = 'http://de.votkpromtech.ru/auth.html';</script>";

    } else {
        echo "Критическая ошибка. Сообщите администратору Email: 111@111.com <br>";
    }
}

//if ($conn->query($sqlquery)) {
//prover` script i vyvedi stranicu vhoda
//}
//vyvedi soobshenie ob oshibke i verni stranicu registracii
//delete "error" after debug
//} else {
//ocherednaya oshibka
//echo "LAST ELSE";
//}
//die ($conn);