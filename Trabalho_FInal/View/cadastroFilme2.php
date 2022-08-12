<!DOCTYPE html>
<html lang="en">

<head>
    <title>MyCineList - Cadastro Filme</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link bootrap e jquery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="imagem/png" href="./css/imagens/logo_minimalist.png" />
</head>

<body>
    <?php
    include_once("barraNavegacao.php");
    ?>

    <div id="container">
        <form action="insereFilme.php" method="post" enctype="multipart/form-data">
            Selecione uma imagem para upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
    <div id="mensagemDiv"></div>
    <?php
    include_once("rodape.php");
    ?>
</body>

</html>