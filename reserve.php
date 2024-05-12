<?php 
require 'connexion.php';

if(isset($_GET["submit"])){
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $mail = $_GET["mail"];
    $date = $_GET["date"];
    $creneau = $_GET["creneaux"];

    $sql = "INSERT INTO hh_user(nom_user,prenom_user,mail_user) VALUES(:nom,:prenom,:mail)";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':prenom',$prenom);
    $stmt->bindParam(':mail',$mail);
        $stmt->execute();
   

/* 
        // Envoi du courrier électronique de confirmation
        $to = $mail;
        $subject = "Confirmation de réservation";
        $message = "<p>Merci pour votre réservation !</p>";
        $headers = "From: HommadeHommous@example.com\r\n";
        $headers .= "Content-type: text/html\r\n";
        mail($to, $subject, $message, $headers); */
};


if(isset($_GET["submit"])){
    $jour = $_GET["date"];
    $creneau = $_GET["creneaux"];

    $sql2 = "INSERT INTO hh_reservation(date_reservation,creneau_reservation) VALUES(:jour,:creneau)";
    $stmt2 = $db->prepare($sql2);

    $stmt2->bindParam(':jour',$date);
    $stmt2->bindParam(':creneau',$creneau);
        $stmt2->execute();

    echo " <script> alert('Réservation confirmée ! Vous recevrez bientôt un e-mail de confirmation.'); </script> ";
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HH - Réservation</title>
<link rel="stylesheet" href="styles.css">
<script src="https://kit.fontawesome.com/ac86f9bd86.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>

<body>
<!-- début header -->
    <header>
        <section class="header">
            <nav>
            <a class="evitement" href="#formulaire">Aller au contenu</a>
        
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"> </i>
            </label>
            <a href="index.php" class="logo">Hommade Hommous</a>
            <ul>
                <li><a class="a_nav" href="index.php">Home</a></li>
                <li><a href="about.php" class="a_nav">Nous</a></li>
                <li><a href="concept.php" class="a_nav">Nos Ateliers</a></li>
                <li><a href="reserve.php" class="active a_nav book_btn">Réserver</a></li>
            </ul>
            </nav>
        </section>
    </header>
    <!-- fin header -->
    
    
<!-- début formulaire réservation -->

<section class="formulaire" id="formulaire">

<div class="heading">
    <h1>Réservez un créneau</h1>   
</div>

<div class="form">
    
<form action="reserve.php" method="get" autocomplete="on">

    <div class="date">
        <label>Prénom<input type="text" name="prenom" class="box" required></label>
        <label>Nom<input type="text" name="nom" class="box" required></label>
    </div>
    <label>Mail<input type="email" name="mail" class="box" required></label>
    <div class="date">
        <label>Date<input type="date" name="date" class="box" required></label>
        <label>Créneau
        <select name="creneaux" id="creneaux" class="box" required>
            <option value="">Choisir un créneau</option>
            <option value="10-12">10h-12h</option>
            <option value="14-16">14h-16h</option>
            <option value="16-18">16h-18h</option>
        </select>
    </div>
    <input type="submit" name="submit" class="btn" value="Réserver"></input>
</label>

</form>

</div>


</section>




    <!-- début footer -->

<section class="footer">
    <div class="icons-container">
        <div class="icons">
             <i class="fas fa-clock"></i>
             <h3>Heures d'ouverture</h3>
             <p>7 j / 7</p>
             <p>de 11h à 22h</p>
        </div>

        <div class="icons">
             <i class="fas fa-address-book"></i>
             <h3>Contact</h3>
             <p>07 83 62 45 20</p>
             <p>poischiche@gmail.com</p>
        </div>

        <div class="icons">
             <i class="fas fa-map"></i>
             <h3>Adresse</h3>
             <p>156 Boulevard Voltaire, 75011</p>
        </div>

        <div class="icons">
             <i class="fa-solid fa-info"></i>
             <h3>Infos Pratiques</h3>
             <p><a href="#">Mentions Légales</a></p>
             <p><a href="#">Accéssibilité</a></p>
             <p><a href="#">FAQ</a></p>
        </div>
    </div> 
    
    <div class="share">
            <a href="#"><span class="sr-only">Facebook</span><i class="fab fa-facebook-f"></i></a>
            <a href="#"><span class="sr-only">Twitter</span><i class="fab fa-twitter"></i></a>
            <a href="#"><span class="sr-only">Instagram</span><i class="fab fa-instagram"></i></a>
    </div>
    
    <div class="credit"> Créé par <span>Clara Moubarak</span> | tous droits réservés</div>
 
    
</section>

<!-- fin footer -->




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>

</html>