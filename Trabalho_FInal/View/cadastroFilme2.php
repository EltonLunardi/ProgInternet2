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
    <script>
        function previewImagem() {
            var imagem = document.getElementById('imagem').files[0];
            var preview = document.getElementById('imgPrev');
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (imagem) {
                reader.readAsDataURL(imagem);
            } else {
                preview.src = "img/ico.png";
            }
        }
    </script>
    <script rsc="text/javascript">
        $(function() {
            $("#meuform").submit(function(event) {
                event.preventDefault();

                var dados_form = $(this).serialize();
                $.ajax({
                    type: "post",
                    url: "../Controller/insereFilme.php",
                    data: dados_form,
                    success: function(responseData) {
                        $("#mensagemDiv").html("" + responseData);
                        document.getElementById('titulo').value = "";
                        document.getElementById('duracao').value = "";
                        document.getElementById('produtora').value = "";
                        document.getElementById('sinopse').value = "";

                        $().ready(function() {
                            setTimeout(function() {
                                $('#mensagemDiv').hide();
                            }, 2500);
                        });
                    },
                    error: function(request, status, error) {
                        $("#mensagemDiv").html("" + responseText);
                        $().ready(function() {
                            setTimeout(function() {
                                $('#mensagemDiv').hide();
                            }, 2500);
                        });
                    }
                });
            });
        });
    </script>
</head>

<body>
    <?php
    include_once("barraNavegacao.php");
    ?>

    <div id="container"> 

        <img id="imgPrev" class="addimagem" style="border-radius:20px" src='http://anakordelos.com/wp-content/uploads/2016/05/top-05-filmes-favoritos-da-vida.jpg'><br><br>
        <form class="form-horizontal" id="meuform" method="post" name="form" enctype="multipart/form-data" action="insereFilme.php">
            <form class="omb_loginForm" action="" autocomplete="off" method="POST" id="meuformlogin">
                <div class="form-group">
                    <label class="col-md-2 control-label" for="titulo">Título <h11>*</h11></label>
                    <div class="col-md-9">
                        <input id="titulo" name="titulo" placeholder="" class="form-control input-md" required="" type="text">
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="produtora">Produtora <h11>*</h11></label>
                        <div class="col-md-4">
                            <input id="produtora" name="produtora" placeholder="" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <label class="col-md-1 control-label" for="duracao">Duração </label>

                    <div class="col-md-4">
                        <input id="duracao" name="duracao" placeholder="Minutos" class="form-control input-md" required="" type="number">
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="sinopse">Sinopse</label>
                        <div class="col-md-9">
                            <input id="sinopse" name="sinopse" placeholder="" class="form-control input-md" required="" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-8">
                            <div>
                                <input id="Cadastrar" name="submit" class="submit" type="submit" value="Cadastrar">
                            </div>
                            <div>
                                <input id="Cancelar" name="Cancelar" class="submit" type="Reset" value="Cancelar">
                            </div>
                        </div>
                    </div>
            </form>
    </div>
    <div id="mensagemDiv"></div>
    <?php
    include_once("rodape.php");
    ?>
</body>

</html>