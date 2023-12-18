<?php
function ajouterArticle($nom_article, $prix_article) {
    try {
        $db = connexionBdd();
        $stmt = $db->prepare("INSERT INTO article (nom_article, prix_article) VALUES (?, ?)");
        $stmt->bindParam(1, $nom_article);
        $stmt->bindParam(2, $prix_article);
        $stmt->execute();
        return "Article ajouté avec succès !! <br/> Nom: {$nom_article} <br/>Prix: {$prix_article}";
    } catch (PDOException $error) {
        return $error->getMessage();
    }
}
