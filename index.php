<?php
include './utils/utils.php';
include './model/model.php';
include './view/view.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitArticle'])) {
    $nom_article = filter_input(INPUT_POST, 'nom_article', FILTER_SANITIZE_STRING);
    $prix_article = filter_input(INPUT_POST, 'prix_article', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    if ($nom_article && $prix_article) {
        $message = ajouterArticle($nom_article, $prix_article);
    } else {
        $message = "Remplissez correctement le formulaire";
    }
}

afficherArticle($message);
