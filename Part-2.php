<form method="post">
    <input name="nom" autocomplete="off" placeholder="Nom"><br><br>
    <input name="texte" autocomplete="off" placeholder="Texte">
    <input type="submit">
</form>

<?php

include("Article.php");
if(isset($_POST["nom"], $_POST["texte"])){
    $nom = $_POST["nom"];
    $texte = $_POST["texte"];

    $article = new Article(htmlspecialchars($nom), htmlspecialchars($texte));
    $article->getName("Je m'appelle ");
    echo "<br>";
    $article->getText("Voici mon texte : ");
    echo "<br>";
    $article->getDate("On est le : ");
}

?>
