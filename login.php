<?php

require 'db_connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$check_login = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
$check_senha = mysqli_query($conn, "SELECT password FROM users WHERE password = '$password'");

$validateUser = mysqli_query($conn, "SELECT id, firstname, lastname, regiao FROM users WHERE email = '$email' AND password = '$password' ");
$validateUser = mysqli_fetch_array($validateUser);

if (mysqli_num_rows($check_login) > 0) {
    if (mysqli_num_rows($check_senha) > 0) {

        session_start();
        $_SESSION['id'] = $validateUser['id'];
        $_SESSION['firstname'] = $validateUser['firstname'];
        $_SESSION['lastname'] = $validateUser['lastname'];
        $_SESSION['regiao'] = $validateUser['regiao'];

        echo "<script>
        window.location.href = 'dashboard.php';
        </script>";
        exit;
    } else {
        echo "<script>
        alert('Senha incorreta');
        window.location.href = 'index.php';
        </script>";
        exit;
    }
} else {
    echo "<script>
    alert('Login não identificado');
    window.location.href = 'index.php';
    </script>";
    exit;
}
