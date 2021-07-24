<?php

$article = new Article('Mevlut beau', 'Un court texte pour essayer');
$article->getName("Je m'appelle ");
echo "<br>";
$article->getText("Voici mon texte : ");
echo "<br>";
$article->getDate("On est le : ");

?>
