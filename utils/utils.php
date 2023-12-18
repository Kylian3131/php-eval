<?php
function connexionBdd() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=ticket", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    } catch (PDOException $error) {
        die("Connection failed: " . $error->getMessage());
    }
}
