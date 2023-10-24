<?php
require 'db_connection.php';
?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicação</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="login">

    <div class="form">
      
      <form action="login.php" method="post">
        <h2 class="text">Faça login para continuar </h2>

        <strong class="text">Email</strong>
        <input type="text" name="email" placeholder="Login" required>

        <strong class="text">Senha</strong>
        <input type="password" name="password" placeholder="Senha" required>

        <input type="submit" value="Fazer Login">

        <a id="cadastro" href="cadastro.php">Cadastre-se</a>
      </form>

    </div>
  </div>
</body>

</html>