<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hommade Hommous</title>
<link rel="stylesheet" href="styles.css">
<script src="https://kit.fontawesome.com/ac86f9bd86.js" crossorigin="anonymous"></script>
<link rel="icon" href="images/favicon.ico" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>

<body>

<header>

    <section class="header">
        <nav>
        
        <a class="evitement" href="#contacts">Aller au contenu</a> 
        
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"> </i>
        </label>
        <a href="index.php" class="logo">Hommade Hommous</a>
        <ul>
            <li><a class="a_nav" href="index.php">Home</a></li>
            <li><a href="about.php" class="a_nav">Nous</a></li>
            <li><a href="concept.php" class="a_nav">Nos Ateliers</a></li>
            <li><a href="contact.php" class="a_nav active">Contact</a></li>
        </ul>
        </nav>
    
    </section>
</header>

<main> 

<section class="contacts">

<?php 
if(!empty($_POST["send"])){
    $userNom = $_POST["userNom"];
    $userEmail = $_POST["userEmail"];
    $userTel = $_POST["userTel"];
    $userMessage = $_POST["userMessage"];
    $toEmail = "clara.moubarak75@gmail.com";

    $mailHeaders = "Nom: " . $userNom . 
    "\r\n Email: " . $userEmail .
    "\r\n N° de téléphone: " . $userTel .
    "\r\n Message: " . $userMessage . "\r\n";

    if(mail($toEmail, $userNom, $mailHeaders)) {
        $message = "Votre message a bien été reçu !";
    }


}
?>

<div class="heading2">
        <span>Hommade Hommous à votre disposition</span>
        <h1>Contactez-nous</h1>
</div>


<div class="formulaire_contact">
    
    <div class="form-container">
        <div class="form-design">
            <h2>Laissez-nous un message !</h2>
            <img src="images/contact-us.png" alt="" class="image">
            <div class="social-links">
                <span>Suivez-nous :</span>
                <ul class="social-media">
                    <li><a href="#"><span class="sr-only">Facebook</span><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><span class="sr-only">Twitter</span><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><span class="sr-only">Instagram</span><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    
        <form method="post" name="emailContact">
            <div class="input-row">
                <label>Nom<em>*</em><input type="text" name="userNom" required></label>
            </div>
            <div class="input-row">
                <label>Email<em>*</em><input type="email" name="userEmail" required></label>
            </div>
            <div class="input-row">
                <label>N° de téléphone<em>*</em><input type="tel" name="userTel" required></label>
            </div>
            <div class="input-row">
                <label>Message<em>*</em><textarea name="userMessage" required></textarea></label>
            </div>
            <div class="input-row">
                <input type="submit" name="send" class="btn" value="Envoyer">
                <?php
                    if(!empty($message)) {
                 ?>
                <div class="success">
                    <strong><?= $message ?></strong>
                </div>
                <?php
                    }
                 ?>
            </div>
    
        </form>
    </div>
</div>

            
            


</section>


</main>




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