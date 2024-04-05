<?php

// include("db_conn.php");

//////////////////////////////////////////////////////
///SDELAI EKRANIROVANIE mysqli_real_escape_string()///
////////////////////////////////////////////////////////////////////
///RAZDELI INFORMACIU O BAZE DANNIH I REGISTRACIU NA RAZNIE FAILI///
////////////////////////////////////////////////////////////////////

//constants from db --- need to split at 2 files


// $servername = "31.31.196.51";
// $username = "u1795888_ksv";
// $password = "password#313";
// $dbname = "u1795888_ksv313_db";


$conn = new PDO("mysql:host=31.31.196.51;dbname=u1795888_ksv313_db", "u1795888_ksv", "password#313");
//connection to db
// $conn = new mysqli($servername, $username, $password, $dbname);

//check fields "is set"
if (isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["FIO"]) && isset($_POST["phone"])) {
    $EMAIL = mysqli_real_escape_string($conn, $_POST["email"]);
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

        //!chini zdes'!
        // ob_start();
        echo "<script>alert('Вы успешно зарегистрировались. Сейчас Вы будете автоматически перенаправлены на страницу входа...')</script>";
        // ob_end_flush();
        
        $mysqli_query = "INSERT INTO users_table (EMAIL, LOGIN, PASSWORD, FIO, PHONE) VALUES ('$EMAIL', '$LOGIN', '$PASSWORD', '$FIO', '$PHONE')";
        echo $mysqli_query;


        $conn->query($mysqli_query);
        
        
        header('Location: http://de.votkpromtech.ru/auth.php');
        exit();

    }
    else {
        echo "2nd ELSE <br>";
        echo "Oshibka:" . $conn->error;
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