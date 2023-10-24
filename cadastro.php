<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicação</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="cadastro">
    <div class="form">
      
      <form action="insert.php" method="post">
        <h1>Cadastre-se</h1>
        <label>Nome</label>
        <input type="text" name="firstname" placeholder="Nome" required>

        <label>Sobrenome</label>
        <input type="text" name="lastname" placeholder="Nome" required>

        <label>numero</label>
        <input type="number" name="number" required>

        <label>CPF</label>
        <input type="number" name="cpf" required>

        <label for="gender">Gênero:</label>
        <select name="gender" id="gender" required>
          <option value="Feminino">Feminino</option>
          <option value="Masculino">Masculino</option>
          <option value="Outros">Outros</option>
        </select>

        <label for="time">Turno:</label>
        <select name="time" id="time" required>
          <option value="Noite">Noite</option>
          <option value="Manhã">Manhã</option>
          <option value="Tarde">Tarde</option>
        </select>

        <label for="regiao">Região:</label>
        <select name="regiao" id="regiao">
          <option value="">Selecione uma região</option>
          <option value="Salto">Salto</option>
          <option value="Sorocaba">Sorocaba</option>
          <option value="Votorantim">Votorantim</option>
          <option value="Boituva">Boituva</option>
        </select>

        <div>
        <label>Irá dar carona?</label>
        <input type="checkbox" name="providing_ride" id="providing_ride">
        </div>

        <label>Email</label>
        <input type="text" name="email" placeholder="Nome" required>

        <label>Senha</label>
        <input type="password" name="password" placeholder="Senha" required>

        <input type="submit" value="Cadastrar">
        <a href="index.php">Já se cadastrou? fazer login</a>
      </form>
    </div>
  </div>
</body>

</html>