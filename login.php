<?php
include 'db.php';

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST["email"];
    $password = $_POST["password"];

    // Usar prepared statement para selecionar o usuário com o e-mail fornecido
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifica se a senha inserida corresponde à senha (hash) do banco de dados
        if(password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;
            header("location: home.php"); // Redireciona para uma página de boas-vindas
        } else {
            $error = "Email ou senha incorretos!";
            echo "<script>
            alert('$error');
                window.location.href='login.php';
        </script>";
        exit;
        }
    } else {
        $error = "Email ou senha incorretos!";
        echo "<script>
        alert('$error');
            window.location.href='login.php';
    </script>";
    exit;
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    
  <link rel="icon" type="image/x-icon" href="img/car-svgrepo-com.svg">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <div class="container">
      <div class="form-image">
          <img src="img/undraw_trip_re_f724.svg" alt="">
      </div>
      <div class="form">
        <form onsubmit="return validarSenha()" method="post" action="">
              <div class="form-header">
                  <div class="title">
                      <h1>Log-in</h1>
                  </div>
                  <div style="margin-left:2rem; margin-bottom:0.5rem;" class="login-button">
                      <button><a href="index.php">Cadastre-se</a></button>
                  </div>
              </div>

              <div class="input-group">
                  <div style="margin:1rem" class="input-box">
                      <label for="email" style="font-size: 15px;">E-mail</label>
                      <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                  </div>
                  <div style="margin:1rem" class="input-box" >
                      <label for="password" style="font-size: 15px;">Senha</label>
                      <input id="password" type="password" name="password" placeholder="Shhh..." required>
                  </div>
              </div>             
              <div class="continue-button">
                  <button type="submit" style="color: white;">Entrar</button>
              </div>
          </form>
      </div>
  </div>
</body>

</html>
