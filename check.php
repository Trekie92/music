<?php
include "inc/framework.php";
include "inc/database.php";

$username = $password = "";

$username = $_POST["username"];
$password = $_POST["password"];

$conn = connect();

$result = $conn->query("SELECT * FROM user");

$valid = FALSE;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($row["username"] = $username AND $row["passwd"] = $password) {
            $valid = TRUE;
        }
    }
}


if ($valid) {
    headder("Musikdatenbank Zugang", "main.php");
} else {
    headder();
    echo "Benutzername/Passwort falsch :(";
}

disconnect($conn);


footer();

/*
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["user_id"]. " - Benutzernameame: " . $row["username"] . " - Passwort: " . $row["passwd"] . " - Rechte: " .
        $row["dbrights"] . " - " . $row['userrights'] . "<br>";
    }
} else {
    echo "0 results";
}
*/