<?php
    class HtmlObject {
        private $id;
        private $class;

        function __construct($id=null, $class=null) {
            $this->id = $id;
            $this->class = $class;
        }
    }