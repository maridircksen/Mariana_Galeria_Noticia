<?php
include_once "autoload.php";

    class Ol {
        private $reversed;
        private $start;
        private $type;
        private $listaElementos = [];
       
        function __construct($reversed, $start, $type) {
            if($reversed) {$this->reversed = $reversed;};
            if($start) {$this->start = $start;};
            if($type) {$this->type = $type;};
        }

        function addElemento($elemento) {
            $this->listaElementos[] = $elemento;
        }
       
        function __toString() {
            $ol = "<ol>";
            foreach($this->listaElementos as $iListaElementos){
                $ol .= $iListaElementos;
            }
            $ol .= "</ol>";
            return $ol;
        }
    }