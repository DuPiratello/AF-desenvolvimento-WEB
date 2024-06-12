<?php
require 'db_connection.php';
?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FACENS CarPool</title>
  <link rel="stylesheet" href="./styles/login.css">
</head>

<body>
  <div class="login" style=" flex-direction: column;">

  <div class="intro-text" style="  ">
          <h2>Bem-vindo ao FACENS CarPool! Nossa plataforma conecta estudantes da FACENS que desejam compartilhar caronas, promovendo uma comunidade mais sustentável e economizando dinheiro no transporte. Faça login para começar a encontrar ou oferecer caronas na sua região.</h2>
        </div>

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


<style>
  .intro-text{
    text-align: center;
    margin-top:-100px;
    margin-bottom: 50px;      /* Espaçamento inferior para separar do container */
    color: var(--white);      /* Cor do texto para contraste com o fundo */
    max-width: 600px;         /* Largura máxima para um bom layout responsivo */
    
    /* Efeito de sombra */
    text-shadow: 3px 3px 0 var(--purple-1), 
                 2px 2px 0 var(--purple-1), 
                 1px 1px 0 var(--purple-1);
    
    /* Efeito de borda */
    border: 2px solid var(--white);
    border-radius: 1ch;
    padding: 20px;
    box-shadow: 0 0 15px;
  }
</style>

</html>