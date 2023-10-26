<?php

require 'db_connection.php';
$email = $_POST['email'];
$password = $_POST['password'];
$check_login = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
$check_senha = mysqli_query($conn, "SELECT password FROM users WHERE password = '$password'");
if (mysqli_num_rows($check_login) > 0) {
    if (mysqli_num_rows($check_senha) > 0) {
        echo "<script>
        window.location.href = 'dashboard.php';
        </script>";
        exit;
    }else{
        echo "<script>
        alert('Senha incorreta');
        window.location.href = 'index.php';
        </script>";
        exit;
    }
}else{
    echo "<script>
    alert('Login não identificado');
    window.location.href = 'index.php';
    </script>";
    exit;
}
?>

<html>
    <head>

    </head>
    <body>

    </body>
</html>
