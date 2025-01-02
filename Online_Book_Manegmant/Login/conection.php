<?php
$servarname = "localhost";
$username = "root";
$password = "";
$dbname = "online_book";
try {
    $con = new PDO("mysql:host={$servarname};dbname={$dbname}", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($con) {
        //die("Connection successful");
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
