<?php

function connect() {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "music";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Datenbankverbindung fehlgeschlagen: " . $conn->connect_error);
    } else {
        echo "<br />Verbindung hergestellt!<br />";
        return $conn;
    }
}

function disconnect($conn) {
    $conn->close();
}