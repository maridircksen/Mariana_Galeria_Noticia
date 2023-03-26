<?php
    class Div extends HtmlObject {
        private $listaElementos = [];

        public function __construct($id, $class) {
            parent::__construct($id, $class);
        }
       
        function addElemento($elemento) {
            $this->listaElementos[] = $elemento;
        }

        function __toString() {
            $div = "<div>";
            foreach($this->listaElementos as $iListaElementos){
                $div .= $iListaElementos;
            }
            $div .= "</div>";
            return $div;
        }
    }