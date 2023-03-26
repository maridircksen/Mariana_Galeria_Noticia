<?php
include_once "autoload.php";

    class Meta {
        private $charset;
        private $httpequiv;
        private $content;
        private $name;

        function __construct($charset, $httpequiv, $content, $name) {
            if ($charset) {$this->charset = $charset;};
            if ($httpequiv) {$this->httpequiv = $httpequiv;};
            if ($content) {$this->content = $content;};
            if ($name) {$this->name = $name;};
        }

        function __toString() {
            return "<meta charset=\"{$this->charset}\" 
                          httpequiv=\"{$this->httpequiv}\" 
                          content=\"{$this->content}\" 
                          name=\"{$this->name}\">";
        }
    }