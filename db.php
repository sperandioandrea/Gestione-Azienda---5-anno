<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "dberp";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
} else {
    echo "Connessione al database avvenuta con successo!";
}

?>
