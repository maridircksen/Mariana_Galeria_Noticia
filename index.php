<?php
session_start();

// Verifica se há notícias armazenadas na sessão
if (isset($_SESSION['noticias'])) {
  $noticias = $_SESSION['noticias'];
}
else {
  $noticias = array();
}

// Exibe as notícias
foreach ($noticias as $noticia) {
  echo "<div><img src= {$noticia ['imagem']}></div>";
  echo "<h2>{$noticia['titulo']}</h2>";
  echo "<p>{$noticia['conteudo']}</p>";
  echo "<p>{$noticia['data']}<p>";
}
?>

