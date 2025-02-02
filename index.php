<?php 
require 'connexion.php';
?>

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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">


</head>

<body>   

<!-- début header  -->
<header>

<section class="header">
    <nav>
    
    <a class="evitement" href="#about">Aller au contenu</a> 
    
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
    <span class="sr-only">Burger Menu</span><i class="fas fa-bars"> </i>
    </label>
    <a href="#" class="logo love-ya-like-a-sister-regular">Hommade Hommous</a>
    <a href="#" class="logo2 love-ya-like-a-sister-regular">HH</a>
    <ul>
        <li><a class="active a_nav" href="#">Home</a></li>
        <li><a href="about.php" class="a_nav">Nous</a></li>
        <li><a href="concept.php" class="a_nav">Nos Ateliers</a></li>
        <!-- <li><a href="contact.html" class="a_nav">Contactez-nous</a></li> -->
        <li><a href="contact.php" class="a_nav">Contact</a></li>
    </ul>
    </nav>

</section>
</header>

<!-- fin header -->



<!-- début section 1 slider accueil-->

<section class="home" id='home'>

<div class="swiper home-slider">
    <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background: url(images/home.avif) no-repeat" >
            <div class="content">
                <span>Chiche ou Pois Chiche ?</span>
                <h1 class="love-ya-like-a-sister-regular">Venez cuisiner votre apéro</h1>
                <a href="#about" class="btn">C'est Parti !</a>
            </div>
        </div>
        
        <div class="swiper-slide slide" style="background: url(images/slide4.jpg) no-repeat" >
            <div class="content">
                <span>Chiche ou Pois Chiche ?</span>
                <h1 class="love-ya-like-a-sister-regular">Découvrez une autre culture</h1>
                <a href="#about" class="btn">C'est Parti !</a>
            </div>
        </div>
        
        <div class="swiper-slide slide" style="background: url(images/slide.jpg) no-repeat" >
            <div class="content">
                <span>Chiche ou Pois Chiche ?</span>
                <h1 class="love-ya-like-a-sister-regular">Passez des moments de qualité</h1>
                <a href="#about" class="btn">C'est Parti !</a>
            </div>
        </div>
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</section>

<!-- fin section 1 slider -->


<!-- début section about us -->
<section class="about" id="about">
    <div class="image">
        <img src="images/hummus.png" alt="">
    </div>

    <div class="content">
        <h1 class="title love-ya-like-a-sister-regular">Bienvenue à Hommade Hommous !</h1>
        <p>Imaginez si Tinder rencontrait Cauchemars en cuisine. Cela semble être la recette du désastre, mais croyez-moi:
        La catastrophe n’est pas la seule recette que vous apprendrez avec nous car à Hommade Hommous, vous venez préparer vos propres repas libanais et repartez avec des amis pour la vie. </p>
        <a href="about.php" class="btn">En savoir plus</a>
        <div class="icons-container">
            <div class="icons">
                <img src="images/cooking.png" alt="">
                <h3>Ajoutez votre grain de sel</h3>
            </div>
            <div class="icons">
                <img src="images/restaurant.png" alt="">
                <h3>Faites de nouvelles rencontres</h3>
            </div>
            <div class="icons">
                <img src="images/lebanon.png" alt="">
                <h3>Découvrez les saveurs du Liban</h3>
            </div>
        </div>
    </div>
</section>
<!-- fin section about us -->



<!-- début section wrapper ateliers -->

<section class="ateliers" id="ateliers">

<div class="heading">
    <span>Choix</span>
    <h2 class="love-ya-like-a-sister-regular">Ateliers</h2>
</div>  

<div class="atelier_wrapper">
        <div class="atelier_container">
        <?php
        
        // Sélectionne tous les enregistrements de la table hh_atelier 
        $requete = "SELECT * FROM hh_atelier ORDER BY id_atelier" ;
        $stmt = $db->query($requete);
        $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);

        // Parcoure le résultat et affiche chaque enregistrement sous forme de carte d'atelier 
        foreach ($resultat as $hh_atelier) {
            echo '<input type="radio" name="slide" id="c' . $hh_atelier["id_atelier"] . '" checked>
            <label for="c' . $hh_atelier["id_atelier"] . '" class="atelier_card">
            <div class="row">
                <div class="atelier_icon">' . $hh_atelier["id_atelier"] . '</div>
                <div class="description">
                <h3>' . $hh_atelier["activité"] . '</h3>
                <p>' . $hh_atelier["resume"] . '</p>
                </div>
            </div>
            </label>';
        }
        ?> 
    </div>
</div>

<div class="bouton">
        <a href="concept.php" class="btn">Lire plus</a>
</div>

</section>

<!-- fin section wrapper ateliers -->



<!-- début section réservation -->

<section class="reservation" id="reservation">
    <div class="content">
        <h1 class="title love-ya-like-a-sister-regular">Réservez maintenant !</h1>
        <p>Quelque soit l'atelier, vous voulez simplement rencontrer de nouvelles personnes en passant un bon moment ? Pas de soucis, vous pouvez accédez dés à présent au formulaire de réservation pour choisir un créneau.</p>
        <a href="concept.php" class="btn">Choisir un atelier</a>
    </div> 
    
    <div class="image">
        <img src="images/reservation.png" alt="">
    </div>


</section>

<!-- fin section réservation -->



<!-- début section blog -->

<section class="blogs" id="blogs">
<div class="heading">
    <span>Avis</span>
    <h2 class="love-ya-like-a-sister-regular">Posts</h2>
</div>

<div class="swiper blogs-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/nourriture.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <span class="solo"><i class="fas fa-calendar"></i> 1er mai 2024 </span>
                    <span class="solo"><i class="fas fa-user"></i> by elodie_marchand </span>
                </div>
                <h3 href="#" class="title">"Un plaisir culinaire et social !"</h3>
                <p> Participer à un atelier Hommade Hommous est une expérience enrichissante où j'ai appris à cuisiner des plats libanais tout en rencontrant des personnes formidables. Recommandé pour ceux qui aiment la bonne cuisine et de nouvelles amitiés.</p>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/amis.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <span class="solo"><i class="fas fa-calendar"></i> 26 avril 2024 </span>
                    <span class="solo"><i class="fas fa-user"></i> by ._marc </span>
                </div>
                <h3 href="#" class="title">"Connexion à travers la cuisine." </h3>
                <p>Hommade Hommous offre une expérience de partage unique où vous pouvez apprendre à cuisiner tout en rencontrant d'autres passionnés de cuisine. Une occasion parfaite pour élargir vos horizons culinaires et votre cercle social.</p>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/hummus.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <span class="solo"><i class="fas fa-calendar"></i> 14 janvier 2024 </span>
                    <span class="solo"><i class="fas fa-user"></i> by Hélène </span>
                </div>
                <h3 href="#" class="title">"Cuisine et amitié chez Hommade Hommous."</h3>
                <p>Des ateliers bien organisés, des ingrédients de qualité et une ambiance conviviale font de Hommade Homous l'endroit idéal pour cuisiner, apprendre et se faire de nouveaux amis. Une expérience inoubliable à ne pas manquer !</p>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/partager.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <span class="solo"><i class="fas fa-calendar"></i> 5 avril 2024 </>
                    <span class="solo"><i class="fas fa-user"></i> by Cally.04 </>
                </div>
                <h3 href="#" class="title">"Une aventure culinaire et sociale."</h3>
                <p>Chez Hommade Hommous, j'ai découvert plus qu'un simple cours de cuisine. C'est une véritable aventure où vous pouvez cuisiner, apprendre et tisser des liens authentiques avec d'autres passionnés de cuisine.</p>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/kaak-al-eid.png" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <span class="solo"><i class="fas fa-calendar"></i> 11 février 2024 </span>
                    <span class="solo"><i class="fas fa-user"></i> by lilooo </span>
                </div>
                <h3 class="title">"Cuisinez, apprenez et liez-vous d'amitié."</h3>
                <p> Hommade Homous offre une expérience culinaire enrichissante où vous pouvez explorer la cuisine libanaise tout en rencontrant des personnes partageant les mêmes intérêts. Parfait pour les gourmets en quête de nouvelles expériences sociales.</p>
            </div>
        </div>
    </div>

    <div class="swiper-pagination"></div>

</div>
</section>

<!-- fin section blog -->


<!-- début footer -->

<section class="footer">
    <div class="icons-container">
        <div class="icons">
             <i class="fas fa-clock"></i>
             <h3>Heures d'ouverture</h3>
             <p>7 j / 7</p>
             <p>de 10h à 20h</p>
        </div>

        <div class="icons">
             <i class="fas fa-address-book"></i>
             <h3>Contact</h3>
             <p>07 23 60 88 01</p>
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
             <p><a href="mentions.html">Mentions Légales</a></p>
             <p><a href="about.php">À propos</a></p>
             <p><a href="faq.html">FAQ</a></p>
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