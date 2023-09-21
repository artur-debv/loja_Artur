<?php
session_start();
// Permitir que o PHP acesse arquivos externos
ini_set("allow_url_fopen", "On");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Login PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <center>
    <div class="container_form">
      <div class="myform form ">
        <div class="logo mb-3">
          <div class="col-md-12 text-center">
            <h1>Login</h1>
          </div>
        </div>
        <form action="#" method="post">
          <div class="form-group">
            <label>Email ou CPF</label>
            <input type="text" name="email" class="form-control valid" placeholder="Insira seu Email ou CPF">
          </div>
          <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" id="senha_login" class="form-control valid" aria-describedby="emailHelp"
              placeholder="Senha">
          </div>
          <div class="col-md-12 text-center mt-4">
            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
          </div>
          <div class="form-group mt-4">
            <small>
              <br>
              <br>
              <br>
              <p class="text-center">Não possui Cadastro?<a href="#" class="modall">Cadastre-se</a></p>
            </small>
          </div>
        </form>
      </div>
    </div>
    <?php
    include_once('conexao.php');
    if ($_POST) {
      $email = $_POST['email'];
      $senha = md5($_POST['senha']);
      $sql = "SELECT cliente_id, primeiro_nome,ultimo_nome,email,senha
                from cliente
            where email = '$email' and senha = '$senha' ";
      if ($result = $conexao->query($sql)) {
        if ($result->num_rows > 0) {
          $linha = $result->fetch_assoc();
          $_SESSION['nome'] = $linha['primeiro_nome'] . ' ' . $linha['ultimo_nome'];
          $_SESSION['id'] = $linha['cliente_id'];
          header("refresh:2;url=http://127.0.0.1/loja/inicio.php");
        } else {
          echo 'usuario ou senha invalidos';
        }
      }
    } else {
      $email = '';
      $senha = '';
    }
    // Verifique se o usuário está logado
    if (!isset($_SESSION['status'])) {
      // Usuário não está logado, redirecione para a página de login
      header('Location: login.php');
      exit;
    }

    // Verifique se o link "Painel" foi clicado
    if (isset($_GET['pagina']) && $_GET['pagina'] == 'painel') {
      // Usuário clicou no link "Painel", redirecione para a página do painel
      header('Location: painel.php');
      exit;
    }
    ?>
    </div>
  </center>
</body>

</html>