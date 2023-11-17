<?php
require 'db_connection.php';
?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicação</title>
  <link rel="stylesheet" href="./styles/login.css">
</head>

<body>

  <div class="login">
    <div class="container">
      <div class="image">
        <img src="./imagens/login.png">
      </div>

      <div class="form">

        <form action="login.php" method="post">
          <h1>Fazer Login</h1>

          <strong class="text">Email</strong>
          <input type="text" name="email" placeholder="Email" required>

          <strong class="text">Senha</strong>
          <input type="password" name="password" placeholder="Shhhh" required>

          <input type="submit" value="Fazer Login">

          <a href="cadastro.php">Cadastre-se</a>
        </form>

      </div>
    </div>
  </div>
</body>

</html>