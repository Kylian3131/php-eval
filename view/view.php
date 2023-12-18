<?php
function afficherArticle($message) {
    ?>
    <form method="post">
        <input type="text" name="nom_article" placeholder="Nom de l'article:">
        <input type="text" name="prix_article" placeholder="Prix:">
        <input type="submit" name="submitArticle" value="Ajouter">
    </form>
    <p><?php echo $message; ?></p>
    <?php
}
