<?php
session_start();

// Verifique se há notícias armazenadas na sessão
if (isset($_SESSION['noticias'])) {
  $noticias = $_SESSION['noticias'];
}
else {
  $noticias = array();
}

// Adicionar a nova notícia
$imagem = $_POST['imagem'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$data = $_POST['data'];
$noticia = array('imagem' => $imagem, 'titulo' => $titulo, 'conteudo' => $conteudo, 'data' => $data);
array_push($noticias, $noticia);

// Armazena as notícias na sessão
$_SESSION['noticias'] = $noticias;

// Redireciona exibe as notícias
header('Location: index.php');
?>


