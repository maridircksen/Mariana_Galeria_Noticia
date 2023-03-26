<?php
    include_once "autoload.php";

    $html = new Html('pt-br');
    $head = new Head();
    $meta1 = new Meta('Utf-8', null, null, null);
    $meta2 = new Meta(null, 'X-UA-Compatible', 'IE=edge', null);
    $meta3 = new Meta(null, null, 'width=device-width, initial-scale=1.0', 'viewport');
    $head->addElemento($meta1);
    $head->addElemento($meta2);
    $head->addElemento($meta3);
    $html->addElemento($head);
    $body = new Body();
    $html->addElemento($body);

    echo $html;