<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicação</title>
  <link rel="stylesheet" href="./styles/register.css">
</head>

<body>

  <div class="register">
    <div class="container">
      <div class="image">
        <img src="./imagens/register.svg">
      </div>

      <div class="form">

        <form action="insert.php" method="post">
          <h1>Cadastre-se</h1>

          <div class="line">
            <div class="first-item">
              <label>Nome</label>
              <input type="text" name="firstname" placeholder="Nome" required>
            </div>

            <div class="second-item">
              <label>Sobrenome</label>
              <input type="text" name="lastname" placeholder="Sobrenome" required>
            </div>
          </div>

          <div class="line">
            <div class="fist-item">
              <label>Número</label>
              <input type="text" id="number" name="number" placeholder="Seu WhatsApp !!!" maxlength="16" required>
            </div>

            <div class="second-item">
              <label>CPF</label>
              <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" maxlength="14" required>
            </div>
          </div>

          <div class="line">
            <div class="first-item">
              <label for="gender">Gênero:</label>
              <select name="gender" id="gender" required>
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
                <option value="Outros">Outros</option>
              </select>


            </div>
            <div class="second-item">
              <label for="time">Turno:</label>
              <select name="time" id="time" required>
                <option value="Noite">Noite</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
              </select>
            </div>

            <div class="third-item">
              <label for="regiao">Região:</label>
              <select name="regiao" id="regiao">
                <option value="">Selecione uma região</option>
                <option value="Salto">Salto</option>
                <option value="Sorocaba">Sorocaba</option>
                <option value="Votorantim">Votorantim</option>
                <option value="Boituva">Boituva</option>
              </select>
            </div>
          </div>

          <div class="providing_ride">
            <label>Irá dar carona?</label>
            <input type="checkbox" name="providing_ride" id="providing_ride">
          </div>

          <div class="line">
            <div class="first-item">
              <label>Email</label>
              <input type="text" name="email" placeholder="Email" required>
            </div>

            <div class="second-item">
              <label>Senha</label>
              <input type="password" name="password" placeholder="Shhh..." required>
            </div>
          </div>

          <input type="submit" value="Cadastrar">
          <a href="index.php">Já se cadastrou? fazer login</a>
        </form>
      </div>

    </div>
  </div>
</body>

<script>
          function formatCpf() {
 const cpf = document.getElementById('cpf');
 const cleanCpf = cpf.value.replace(/\D+/g, '');
  
 if (cleanCpf.length === 11) {
    cpf.value = cleanCpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g, '$1.$2.$3-$4');
 } else {
    cpf.value = cleanCpf;
 }
}
document.getElementById('cpf').addEventListener('input', formatCpf);




          function formatNumber() {
    const number = document.getElementById('number');
    const cleanNumber = number.value.replace(/\D+/g, '');
  
    if (cleanNumber.length === 11) {
      number.value = `(${cleanNumber.substr(0, 2)}) ${cleanNumber.substr(2, 1)} ${cleanNumber.substr(3, 4)}-${cleanNumber.substr(7, 4)}`;
    } else {
      number.value = cleanNumber;
    }
 }
 document.getElementById('number').addEventListener('input', formatNumber);

</script>

</html>
