<?php
    require 'db_connection.php';
    if(isset($_POST['email']) && isset($_POST['password'])) {

        //verifica se os campos de nome de usuario e email estao vazios
        if(!empty($_POST['email']) && !empty($_POST['password'])) {
            //ignorando "escapando" caracteres especiais 
            $firstname = mysqli_real_escape_string($conn, htmlspecialchars($_POST['firstname']));
            $lastname = mysqli_real_escape_string($conn, htmlspecialchars($_POST['lastname']));
            $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
            $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));
            $number = mysqli_real_escape_string($conn, htmlspecialchars($_POST['number']));
            $cpf = mysqli_real_escape_string($conn, htmlspecialchars($_POST['cpf']));
            $gender = mysqli_real_escape_string($conn, htmlspecialchars($_POST['gender']));
            $regiao = mysqli_real_escape_string($conn, htmlspecialchars($_POST['regiao']));
            $time = mysqli_real_escape_string($conn, htmlspecialchars($_POST['time']));
            

            if ($_POST['providing_ride'] == true){
                $providing_ride = 1;
            }else{
                $providing_ride = 0;
            }
           
            
            //verificando se o e-mail é valido
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //verificando se o e-mail ja existe
                $check_login = mysqli_query($conn, "SELECT `email` FROM `users` WHERE email = '$email'");
                if (mysqli_num_rows($check_login) > 0) {
                    echo "<script> 
                    alert('Esse login ja existe, tente outro nome');
                    window.location.href = 'cadastro.php';
                    </script>";
                    exit;
                    
                } else
                    {
                        //Inserindo dados na tabela USUARIOS do banco de dados
                        $insert_query = mysqli_query($conn, "INSERT INTO `users` (firstname, lastname, email, number, cpf, password, gender, time, regiao, providing_ride) VALUES ('$firstname', '$lastname', '$email', '$number', '$cpf', '$password', '$gender', '$time', '$regiao', '$providing_ride')");
                        //Verificando se os dados foram inseridos
                        if($insert_query) {
                            echo "<script>
                            alert('Dados Inseridos');
                            window.location.href = 'index.php';
                            </script>";
                            exit;
                        } else
                            {
                                echo "<h3>Ops... Algo de errado aconteceu! Tente outra vez!</h3>";
                            }
                    }
            } else
                {
                    echo "Endereço de e-mail invalido. Por favor, insira um endereço de e-mail valido.";
                }
        } else
            {
                echo "<h4>Por favor preencha todos os campos.</h4>";
            }
    }
?>