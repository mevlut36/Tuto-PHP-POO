<?php

class Article {
    private $name;
    private $text;
    private $date;

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
        echo "<h1>" . date('Y-m-d / H:i') . "</h1>";
    }
}


$article = new Article('Mevlut beau', 'Un court texte pour essayer');
$article->getName("Je m'appelle ");
echo "<br>";
$article->getText("Voici mon texte : ");
echo "<br>";
$article->getDate("On est le : ");

?>
