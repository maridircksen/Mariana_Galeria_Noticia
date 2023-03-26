<?php
include_once "autoload.php";

    class Body {
        private $listaElementos = [];
       
        function addElemento($elemento) {
            $this->listaElementos[] = $elemento;
        }

        function __toString() {
            $body = "<body>";
            foreach($this->listaElementos as $iListaElementos){
                $body .= $iListaElementos;
            }
            echo{
                
            }
            $body .= "</body>";
            return $body;
        }
    }

