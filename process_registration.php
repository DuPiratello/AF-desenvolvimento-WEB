<?php

include 'db.php';

// Mensagem de retorno
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = mysqli_real_escape_string($conn, filter_var($_POST['firstname'], FILTER_SANITIZE_STRING));
    $lastname = mysqli_real_escape_string($conn, filter_var($_POST['lastname'], FILTER_SANITIZE_STRING));
    $email = mysqli_real_escape_string($conn, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $number = mysqli_real_escape_string($conn, filter_var($_POST['number'], FILTER_SANITIZE_STRING));
    $cpf = mysqli_real_escape_string($conn, filter_var($_POST['CPF'], FILTER_SANITIZE_STRING));
    $wpp = mysqli_real_escape_string($conn, filter_var($_POST['wpp'], FILTER_SANITIZE_URL));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $regiao = mysqli_real_escape_string($conn, filter_var($_POST['regiao'], FILTER_SANITIZE_STRING));
    $providing_ride = isset($_POST['providing_ride']) && $_POST['providing_ride'] == '1' ? 1 : 0;
    



    // Validar o e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'E-mail inválido!';
    } else {
        $sql = "INSERT INTO users (firstname, lastname, email, number, cpf, wpp, password, gender, regiao, providing_ride) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssi", $firstname, $lastname, $email, $number, $cpf, $wpp, $password, $gender, $regiao, $providing_ride);

        try {
            if ($stmt->execute()) {
                // Redirecionar para a página de boas-vindas
                echo "<script>
                alert('Cadastro realizado com sucesso!!!');
                    window.location.href='login.php';
            </script>";
                exit;
                
            }
        } catch (mysqli_sql_exception $e) {
            if($stmt->errno == 1062) {
                $message = 'E-mail ou CPF já cadastrado!';
            } else {
                $message = 'Desculpe, houve um problema ao processar seu cadastro. Tente novamente.';
            }
            echo "<script>
                    alert('$message');
                        window.location.href='index.php';
                </script>";
                exit;
    }
        
        $stmt->close();
    }
}


$conn->close();

// Se houve alguma mensagem, exibi-la.
if ($message) {
    echo "<script>alert('$message');</script>";
}


?>


