<?php
 spl_autoload_register(function($class) {
    $arquivo = $_SERVER["DOCUMENT_ROOT"]
    ."/Mariana_Galeria_Noticia/classes/". $class. ".class.php";

    if (file_exists($arquivo)) {
        require $arquivo;
    }
    
});