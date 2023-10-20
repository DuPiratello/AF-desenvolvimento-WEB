
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
  <title>Facens CarPool</title>
</head>

<body>
  <div class="container">
      <div class="form-image">
          <img src="img/undraw_trip_re_f724.svg" alt="">
      </div>
      <div class="form">
        <form onsubmit="return validarSenha()" method="post" action="process_registration.php">
              <div class="form-header">
                  <div class="title">
                      <h1>Cadastre-se</h1>
                  </div>
                  <div class="login-button">
                      <button><a href="login.php">Entrar</a></button>
                  </div>
              </div>

              <div class="input-group">
                  <div class="input-box">
                      <label for="firstname"style="font-size: 15px;">Primeiro Nome</label>
                      <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                  </div>

                  <div class="input-box">
                      <label for="lastname" style="font-size: 15px;">Sobrenome</label>
                      <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                  </div>
                  <div class="input-box">
                      <label for="email" style="font-size: 15px;">E-mail</label>
                      <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                  </div>

                  <div class="input-box">
                      <label for="number" style="font-size: 15px;">Celular</label>
                      <input id="number" type="tel" name="number" oninput="formatarTel(this)" maxlength="16" placeholder="(XX) X XXXX-XXXX" required>
                  </div>
                  
                  <div class="input-box" >
                    <label for="CPF" style="font-size: 15px;">CPF</label>
                    <input id="CPF" type="text" name="CPF" maxlength="11" oninput="formatarCPF(this)" placeholder="Digite seu CPF" required>
                </div>
                
                <div class="input-box" >
                  <label for="wpp" style="font-size: 15px;">Link WhatsApp</label>
                  <input id="wpp" type="text" name="wpp" placeholder="Coloque o link para contato" required>
              </div>

                <div class="input-box" >
                  <label for="password" style="font-size: 15px;">Senha</label>
                  <input id="password" type="password" name="password" placeholder="Shhh..." required>
              </div>

                <div class="input-box">
                  <label for="confirmPassword" style="font-size: 15px;">Confirme sua Senha</label> 
                  <input id="confirmPassword" type="password" name="confirmPassword" placeholder="De novo, só pra ver se bate" required>
              </div>

              </div>
    <div class="row">
        <div class="col-md-6">
              <div class="gender-inputs">
                  <div class="gender-title">
                      <h6 style="font-size: 15px;">Gênero</h6>
                  </div>

                  <div class="gender-group">
                      <div class="gender-input">
                          <input id="female" value="Feminino" type="radio" name="gender">
                          <label for="female">Feminino</label>
                      </div>

                      <div class="gender-input">
                          <input id="male" value="Masculino" type="radio" name="gender">
                          <label for="male">Masculino</label>
                      </div>

                      <div class="gender-input">
                          <input id="others" value="Outros" type="radio" name="gender">
                          <label for="others">Outros</label>
                      </div>

                  </div>
              </div>
</div>

    <br>
    <div class="col-md-6">
              <div class="time-inputs">
                  <div class="time-title">
                      <h6 style="font-size: 15px;">Turno</h6>
                  </div>

                  <div class="time-group">
                      <div class="time-input">
                          <input id="night" value="noite" type="radio" name="time">
                          <label for="night">Noite</label>
                      </div>

                      <div class="time-input">
                          <input id="morning" value="manha" type="radio" name="time">
                          <label for="morning">Manhã</label>
                      </div>
                  </div>
              </div>
        </div>
</div>

                    <div style="margin:1rem;" class="input-box">
                        <label for="regiao" style="font-size: 15px;">Selecione sua Região</label>
                        <select id="regiao" name="regiao" required>
                             <option value="Sorocaba">Sorocaba</option>
                             <option value="Salto">Salto</option>
                              <option value="Votorantim">Votorantim</option>
                            <option value="Boituva">Boituva</option>
                        </select>
                    </div>
                    <br>
                <div class="providing_ride">
                     <label for="providing_ride"><strong>Se for oferecer a carona preencha o campo: </strong></label>
                     <input id="providing_ride" type="checkbox" name="providing_ride" value="1">
                     
                </div>
              <div class="continue-button">
                  <button type="submit" style="color: white;">Continuar</button>
              </div>
          </form>
      </div>
  </div>
</body>

</html>
