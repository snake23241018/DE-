<?php


$servername = "31.31.196.51";
$username = "u1795888_ksv";
$password = "password#313";
$dbname = "u1795888_ksv313_db";




$EMAIL = isset($_POST["email"]);
$LOGIN = isset($_POST["login"]);
$PASSWORD = isset($_POST["password"]);
$FIO = isset($_POST["FIO"]);
$PHONE = isset($_POST["phone"]);



// !!!!!!!!!!!!!!!!!!!!!!!!
$conn = new mysqli($servername, 
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 
$sqlquery = "INSERT INTO users_table (EMAIL, LOGIN, PASSWORD, FIO, PHONE) VALUES $EMAIL, $LOGIN, $PASSWORD, $FIO, $PHONE";
 
if ($conn->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}
// !!!!!!!!!!!!!!!!!!!!!!!!!






// echo $EMAIL;
// echo " ";
// echo $LOGIN;
?>