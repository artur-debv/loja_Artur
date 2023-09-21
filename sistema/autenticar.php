<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/imagens para uso do favicon/nanotechnology.png" type="image/x-icon" />
  <link rel="stylesheet" href="css/styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Artur tech</title>
</head>
<body>
<?php
// Verifica se a variável de sessão `$_SESSION['logado']` existe
if (isset($_SESSION['logado'])) {
    // O usuário está logado
    header("refresh:3;url=http://127.0.0.1/loja/inicio.php");
  } else {
    // O usuário não está logado
    header("Location: login.php");
  }
?>
</body>
</html>
