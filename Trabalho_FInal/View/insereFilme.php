<?php
include_once('../Model/banco.php');
include_once('../Model/filme.php');

$target_dir = "img_db/"; //diretório onde vao cair as imagens
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//Verificar se é uma imagem
if (isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    echo "Arquivo é uma imagem - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Arquivo não é uma imagem!";
    $uploadOk = 0;
  }
}

// Verificar se o arquivo ja existe
if (file_exists($target_file)) {
  echo "Desculpe, o arquivo ja existe!";
  $uploadOk = 0;
}

//Verificar o tamanho da imagem
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Desculpe, o arquivo é muito grande, inserir um menor!";
  $uploadOk = 0;
}

//Verificar tipo de imagem definido
if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
) {
  echo "Desculpe, apenas os tipos JPG, JPEG, PNG e GIF são aceitos!";
  $uploadOk = 0;
}

//Verificar se o $uploadOk foi setado como 0 por algum erro
if ($uploadOk == 0) {
  echo "Desculpe, o arquivo não foi subido!";
  // Se tiver tudo certo, ele sobe o arquivo
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "O arquivo de nome " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi subido com sucesso!";
  } else {
    echo "Desculpe, houve um erro para subir o arquivo!";
  }
}
//$filme = new Filme($titulo, $produtora, $duracao, $sinopse, $nome_imagem);
//$filme->insereFilme();
?>