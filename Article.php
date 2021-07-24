<?php

class Article {
    private $name;
    private $text;

    public function __construct($name, $text){
        $this->name = $name;
        $this->text = $text;
    }

    public function getName(string $txt){
        echo $txt;
        echo $this->name;
    }

    public function getText(string $txt){
        echo $txt;
        echo $this->text;
    }

    public function getDate(string $txt){
        echo $txt;
        echo "<b>" . date('Y-m-d / H:i') . "</b>";
    }
}
