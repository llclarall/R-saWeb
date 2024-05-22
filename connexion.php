<?php 
try {
$db = new PDO('mysql:host=localhost;dbname=hommade_hommous;port=3306;charset=utf8', 'root', ''); 
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "la connexion a échoué:" . $e->getMessage();
}
?>

