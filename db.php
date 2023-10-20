<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "upx";

// Crie uma conexão
$conn = new mysqli($host, $db_user, $db_pass, $db_name);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

?>
