<?php
session_start();

// Verifique se há notícias armazenadas na sessão
class Formulario {
  Function __toString(){
    if (!isset($_SESSION['noticias'])) {
      $_SESSION['noticias'] = array();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Adicionar a nova notícia
    $imagem = $_POST['imagem'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $data = $_POST['data'];

    $noticia = array(
      'imagem' => $imagem, 
      'titulo' => $titulo, 
      'conteudo' => $conteudo, 
      'data' => $data
    );
    
    array_push($_SESSION['noticias'], $noticia);
      header('Location: '.$_SERVER['PHP_SELF'].'?sucesso=1');
      exit;
    }
    
    if (isset($_SESSION['noticias']) && !empty($_SESSION['noticias'])) {
          $adiciona_noticia = '';
  
          foreach ($_SESSION['noticias'] as $noticia) {
            $adiciona_noticia .= '<p><img src= '. $noticia['imagem'].' alt='.$noticia['imagem'].' ></p>
                                  <h2>'. $noticia['titulo'] .'</h2>
                                  <p>'. $noticia['conteudo'].'</p>
                                  <p>'. $noticia['data'].'</p>
                           <hr>';
          }
      
        }else {

            $adiciona_noticia = '<p>Não há notícias cadastradas!</p>';
          }
          
          $adiciona_noticia .= "<h1>Cadastrar Novas Notícias</h1>
                               <form action= ''  method='post'>
                              <label for='imagem'>Link da Imagem:</label>
                              <input type='url' name='imagem' id='imagem' placeholder='Informe a URL da Imagem' autocomplete='off' required><br><br>>

                              <label for='titulo'>Título:</label>
                              <input type='text' name='titulo' id='titulo' placeholder='Título' autocomplete='off' required><br><br>>

                             <label for='conteudo'>Conteúdo:</label>
                             <textarea name='conteudo' id='conteudo' placeholder='Descreva o Conteúdo' autocomplete='off' required><br><br>></textarea>

                             <label for='data'>Data da Notícia:</label>
                            <input type='date' name='data' id='data' placeholder='Data de Publicação' autocomplete='off' required><br><br>> 
          
                            <input type='submit' value='Publicar Notícia'>
                       </form>";
    
          return $adiciona_noticia;        
        }
      }
    ?>
        
?>


