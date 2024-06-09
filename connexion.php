<?php 

// Gère les erreurs potentielles pdt les requêtes SQL et rend le code plus robuste et facile à déboguer
try {
    // Connexion à la base de données 
    $db = new PDO('mysql:host=localhost;dbname=hommade_hommous;port=3306;charset=utf8', 'root', ''); 

    // Affichage des erreurs  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
// Gestion des erreurs 
catch (PDOException $e) {
    echo "la connexion a échoué:" . $e->getMessage();
}

$logo = "Hommade Hommous";
?>

