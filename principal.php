<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        h2{
            text-align:center;
        }
    </style>
    <center>
    <div class="container">
    <?php
    if(isset($_SESSION['nome'])){
        echo '<h2>bem vindo(a)'.$_SESSION['nome'].'</h2>';
        echo '<a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>';
    }else{
        header("refresh:1;url=http://127.0.0.1/lojass/sistema/login.php");
    }
    ?>
    </div>
    </center>
</body>
</html>