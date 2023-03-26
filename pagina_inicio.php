<?php
  include_once "teste_menu.php";

?>  
  <form action="processar.php" method="post">
            <label for="imagem">Link do Conteúdo:</label>
            <input type="url" name="imagem" id="imagem">

            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo">

            <label for="conteudo">Conteúdo:</label>
            <textarea name="conteudo" id="conteudo"></textarea>

            <label for="data">Data da Notícia:</label>
            <input type="date" name="data" id="data"> 
            
            <input type="submit" value="Enviar">
        </form>


