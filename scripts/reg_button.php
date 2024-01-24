<?php

//////////////////////////////////////////////////////
///SDELAI EKRANIROVANIE mysqli_real_escape_string()///
////////////////////////////////////////////////////////////////////
///RAZDELI INFORMACIU O BAZE DANNIH I REGISTRACIU NA RAZNIE FAILI///
////////////////////////////////////////////////////////////////////

//constants from db --- need to split at 2 files
$servername = "31.31.196.51";
$username = "u1795888_ksv";
$password = "password#313";
$dbname = "u1795888_ksv313_db";

//check fields "is set"
if (isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["FIO"]) && isset($_POST["phone"])) {
    $EMAIL = mysqli_real_escape_string($conn, $_POST["email"]);
    $LOGIN = $_POST["login"];
    $PASSWORD = $_POST["password"];
    $FIO = $_POST["FIO"];
    $PHONE = $_POST["phone"];

    //connection to db
    $conn = new mysqli($servername, $username, $password, $dbname);

    //insert parameters into db, else print "error"
    if ($conn->connect_error) {
        // delete "conn_error" after debug
        // echo "<script>alert('Ne udalos` podkluchit`sya k DB');</script>"
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sqlquery = "INSERT INTO users_table (EMAIL, LOGIN, PASSWORD, FIO, PHONE) VALUES ('$EMAIL', '$LOGIN', '$PASSWORD', '$FIO', '$PHONE')";

        if ($conn->query($sqlquery)) {
            //prover` script i vyvedi stranicu vhoda
            echo "<script>alert('Vi uspeshno zaregalis`. Seychas budet perenapravlenie');</script>";
        } else {
            //vyvedi soobshenie ob oshibke i verni stranicu registracii
            echo "2nd ELSE <br>";
            //delete "error" after debug
            echo "Oshibka:" . $conn->error;
        }
    }
} else {
    //ocherednaya oshibka
    echo "LAST ELSE";
}
//die ($conn);