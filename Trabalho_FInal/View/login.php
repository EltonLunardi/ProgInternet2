<!DOCTYPE html>
<html lang="en">

<head>
  <title>MyCineList - Login</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="icon" type="imagem/png" href="./css/imagens/logo_minimalist.png" />
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="stylesheet" href="css/style.css" />

</head>

<body>
  <?php
  include_once("barraNavegacao.php");
  ?>

  <div id="container">
    <img src="css\imagens\logo_mycinelist_jpg.png">
    <form class="omb_loginForm" action="" autocomplete="off" method="POST" id="meuformlogin">
      <div class="input-group" style="margin:20px;margin-top:0px">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
      </div>
      <span class="help-block"></span>
      <div class="input-group" style="margin:20px;margin-top:0px">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <input type="password" class="form-control" name="senha" placeholder="Password" required="">
      </div>
      <span class="help-block" id="mensagemDiv"></span>
      <div>
        <input class="submit" type="submit" value="Login">
      </div>
      <div id="register">
        Não possui conta?
        <a href="register.html">Cadastre-se</a>
      </div>
    </form>
  </div>

  <?php
  include_once("rodape.php");
  ?>
</body>

</html>