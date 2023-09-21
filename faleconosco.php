<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="formulario.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <title>Fale conosco</title>
</head>

<body>
  <div class="container" id="nav">
    <nav>
      <div id="title">
        <h1><a id="li_1" href="#">Artur tech</a></h1>
      </div>
      <nav class="sc-hAZoDl cqDFSz">
        <div><a href="index.html"><img src="img/icons a ser usadas na navbar/entrar ou cadastrar.png"
              alt="Shop">home</a></div>
        <div><a href="explorar.html"><img src="img/icons a ser usadas na navbar/explorar.png" alt="Shop">Explorar</a>
        </div>
        <div><img src="img/icons a ser usadas na navbar/entrar ou cadastrar.png" alt="Search">
          <p class="p_ou"> <span>Entrar</span> ou <br>se <span>Cadastrar</span></p>
        </div>
        <div><a href="#"><img src="img/imagem carrinho de compra/carrinho compras.png" alt="Search"></a><span>0</span>
        </div>
      </nav>
    </nav>
  </div>


  <div id="register-container">
    <div id="register-banner">
      <div id="banner-layer">
        <h1>Seja bem-vindo</h1>
      </div>
    </div>
    <div id="register-form">
      <h2>Crie sua conta:</h2>
      <p>Registre-se para utilizar todas as funcionalidades do sistema</p>
      <div class="form-control">
        <label for="name">Nome</label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Digite o seu nome"
        />
      </div>
      <div class="form-control">
        <label for="email">E-mail</label>
        <input
          type="text"
          type="email"
          id="email"
          placeholder="Digite o seu e-mail"
        />
      </div>
      <div class="form-control">
        <label for="password">Senha</label>
        <input
          type="text"
          type="password"
          id="password"
          placeholder="Digite a sua senha"
        />
      </div>
      <p>
        Quer ajuda para criar uma senha segura?
        <span id="open-generate-password">Clique aqui.</span>
      </p>
      <div id="generate-options" class="hide">
        <p>Selecione as opções que você deseja</p>
        <div class="form-control">
          <label for="length">Quantidade de caracteres:</label>
          <input type="text" id="length" name="length" value="10" />
        </div>
        <div class="form-control">
          <label for="letters">Letras:</label>
          <input type="checkbox" id="letters" name="letters" checked />
        </div>
        <div class="form-control">
          <label for="numbers">Números:</label>
          <input type="checkbox" id="numbers" name="numbers" checked />
        </div>
        <div class="form-control">
          <label for="symbols">Símbolos:</label>
          <input type="checkbox" id="symbols" name="symbols" checked />
        </div>
        <button id="generate-password">Criar senha</button>
      </div>
      <div id="generated-password">
        <p>Aqui está a sua senha:</p>
        <h4></h4>
        <button id="copy-password">Copiar</button>
      </div>
      <div class="form-control">
        <label for="confirmpassword">Confirmação de Senha</label>
        <input
          type="text"
          type="confirmpassword"
          id="confirmpassword"
          placeholder="Confirme a sua senha"
        />
      </div>
      <input type="submit" value="Cadastrar" />
    </div>
  </div>



  <section class="sc-cxabCf cEZwImdd">
    <div class="sc-llJcti fSiFFA">
      <div class="sc-iIPllB buhlSAdd">
        <div>
          <h4 class="h4_nome">Artur Tech</h4>
        </div>
        <a href="mailto:ColdTech@gamil.com">ArturTech@gmail.com</a>
        <a>+55 85 99999 9999</a>
        <div class="sc-ezWOiH iPCesR">
          <img src="img/imagens usada para o footer/fecebook.png" alt="Conta ColdTech facebook"><img
            src="img/imagens usada para o footer/instagram1.png" alt="Conta ColdTech instagram"><img
            src="img/imagens usada para o footer/twiter1.png" alt="Conta ColdTech twitter">
        </div>
      </div>
      <div class="sc-gicCDI DupHf">
        <h4>Atendimento ao cliente</h4><a href="/contact">Ajuda &amp; Contanto</a><a href="/explorar">Loja online</a><a
          href="/">Home</a>
      </div>
    </div>
    <p class="sc-bZkfAO fJFxfH">Copyright 2022. all rights reserved </p>
  </section>

  <script src="index.js"></script>




</body>

</html>