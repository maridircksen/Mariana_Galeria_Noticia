<?php

    include "autoload.php";

    class Home {

        public function montarPagina(){

            $html = new Html('pt-br');

            $head = new Head();
            $html->addElemento($head);
            
            $meta1 = new Meta('UTF-8', null, null, null);
            $meta2 = new Meta(null, 'X-UA-Compatible', 'IE=edge', null);
            $meta3 = new Meta(null, null, 'width=device-width, initial-scale=1.0', 'viewport');
            $head->addElemento($meta1);
            $head->addElemento($meta2);
            $head->addElemento($meta3);

            $title = new Title('Trabalho - Galeria de Notícias');
            $head->addElemento($title);

            $body = new Body();
            $html->addElemento($body);

            $form = new Formulario();
            $body->addElemento($form);

            $link = new Link ('./css/style.css', 'stylesheet');
            $head->addElemento($link);

            echo $html;
   
        }
    }

?>