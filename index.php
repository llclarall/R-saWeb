<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hommade Hommous</title>
<link rel="stylesheet" href="styles.css">
<script src="https://kit.fontawesome.com/ac86f9bd86.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>

<body>
<!-- page accéssibilité -->
<!-- mezzéchanges -->
    <!-- page concept -->
<!-- page nous -->
<!-- textes -->
<!-- différents ateliers -->
            <!-- nav burger -->   
<!-- mentions légales -->
<!-- formulaire booking -->
<!-- trouver photos -->
<!-- slider blog à revoir peut-être -->
<!-- opquast -->
<!-- styles boutons -->
            <!-- footer -->    
            
<?php 
$db = new PDO('mysql:host=localhost;dbname=hommade_hommous;port=3306;charset=utf8', 'root', ''); 
?>




<!-- début header  -->
<header>

<section class="header">
    <nav>
    
    <a class="evitement" href="#about">Aller au contenu</a> 
    
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"> </i>
    </label>
    <a href="#" class="logo">Hommade Hommous</a>
    <ul>
        <li><a class="active a_nav" href="#">Home</a></li>
        <li><a href="about.php" class="a_nav">Nous</a></li>
        <li><a href="concept.php" class="a_nav">Nos Ateliers</a></li>
        <!-- <li><a href="contact.html" class="a_nav">Contactez-nous</a></li> -->
        <li><a href="reserve.php" class="a_nav book_btn">Réserver</a></li>
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
                <h3>Venez cuisiner votre apéro</h3>
                <a href="#about" class="btn">C'est Parti !</a>
            </div>
        </div>
        
        <div class="swiper-slide slide" style="background: url(images/slide2.webp) no-repeat" >
            <div class="content">
                <span>Chiche ou Pois Chiche</span>
                <h3>Découvrez une autre culture</h3>
                <a href="#about" class="btn">C'est Parti !</a>
            </div>
        </div>
        
        <div class="swiper-slide slide" style="background: url(images/slide3.jpg) no-repeat" >
            <div class="content">
                <span>Chiche ou Pois Chiche</span>
                <h3>Passez des moments de qualité</h3>
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
        <h1 class="title">Bienvenue à Hommade Hommous !</h1>
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

<!-- début section slider mezze -->

<!-- <section class="food" id="food">

<div class="heading">
    <span>aMezzeing</span>
    <h3>au menu</h3>
</div>

<div class="swiper food-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide" data-name="food-1">
            <img src="images/about3.png" alt="">
            <h3>delicious food</h3>
        </div>

        <div class="swiper-slide slide" data-name="food-2">
            <img src="images/about3.png" alt="">
            <h3>delicious food</h3>
        </div>

        <div class="swiper-slide slide" data-name="food-3">
            <img src="images/about3.png" alt="">
            <h3>delicious food</h3>
        </div>

        <div class="swiper-slide slide" data-name="food-4">
            <img src="images/about3.png" alt="">
            <h3>delicious food</h3>
        </div>

        <div class="swiper-slide slide" data-name="food-5">
            <img src="images/about3.png" alt="">
            <h3>delicious food</h3>
        </div>
        
    </div>

    <div class="swiper-pagination"></div>

</div>

</section> -->
<!-- fin section slider mezze -->



<!-- début section ateliers -->

<!-- <section class="ateliers" id="ateliers">
    

    <div class="heading">
    <span>Choix</span>
    <h3>Ateliers</h3>
</div>


<div class="swiper blogs-slider">

<div class="swiper-wrapper">

<div class="swiper-slide slide">
    <div class="image">
        <img src="images/atelier_mezze.jpeg" alt="">
        <span>Mezze</span>
    </div>
    <div class="content">
        <div class="icon">
            <a href="#"><i class="fa-regular fa-clock"></i> 2h </a>
            <a href="#"><i class="fas fa-user"></i> 15 </a>
            <a href="#"><i class="fa-solid fa-money-bill-1-wave"></i> 38 </a>
        </div>
        <h3 class="title">Atelier Mezze</h3>
        <p>Découvrez l'art de la cuisine libanaise lors de notre atelier d'entrées libanaises.</p>
        <a href="#" class="btn">Lire plus</a>
    </div>
</div>

<div class="swiper-slide slide">
    <div class="image">
        <img src="images/atelier_desserts.jpg" alt="">
        <span>Desserts</span>
    </div>
    <div class="content">
        <div class="icon">
            <a href="#"><i class="fa-regular fa-clock"></i> 2h </a>
            <a href="#"><i class="fas fa-user"></i> 15 </a>
            <a href="#"><i class="fa-solid fa-money-bill-1-wave"></i> 38 </a>
        </div>
        <h3 class="title">Atelier Desserts</h3>
        <p>Explorez la délicieuse tradition des desserts libanais lors de notre atelier sucré.</p>
        <a href="#" class="btn">Lire plus</a>
    </div>
</div>

<div class="swiper-slide slide">
    <div class="image">
        <img src="images/atelier_manakish.jpg" alt="">
        <span>Manakish</span>
    </div>
    <div class="content">
        <div class="icon">
            <a href="#"><i class="fa-regular fa-clock"></i> 2h </a>
            <a href="#"><i class="fas fa-user"></i> 15 </a>
            <a href="#"><i class="fa-solid fa-money-bill-1-wave"></i> 38 </a>
        </div>
        <h3 class="title">Atelier Manakish</h3>
        <p>Voyagez au cœur de la cuisine libanaise avec notre atelier culinaire dédié aux manakish.</p>
        <a href="#" class="btn">Lire plus</a>
    </div>
</div>

<div class="swiper-slide slide">
    <div class="image">
        <img src="images/atelier_knefeh.jpg" alt="">
        <span>Knefeh</span>
    </div>
    <div class="content">
        <div class="icon">
            <a href="#"><i class="fa-regular fa-clock"></i> 2h </a>
            <a href="#"><i class="fas fa-user"></i> 15 </a>
            <a href="#"><i class="fa-solid fa-money-bill-1-wave"></i> 38 </a>
        </div>
        <h3 class="title">Atelier Knefeh</h3>
        <p>Plongez dans une aventure gustative unique avec notre atelier dédié aux Knefeh libanais.</p>
        <a href="#" class="btn">Lire plus</a>
    </div>
</div>

</div>

<div class="swiper-pagination"></div>
</div>

</section> -->

<section class="ateliers" id="ateliers">

<div class="heading">
    <span>Choix</span>
    <h2>Ateliers</h2>
</div>  


<div class="swiper">

<div class="slide">
    <div class="image">
        <img src="images/atelier_mezze.jpeg" alt="">
        <span>Mezze</span>
    </div>
    <div class="content">
        <!-- <div class="icon">
            <a href="#"><i class="fa-regular fa-clock"></i> 2h </a>
            <a href="#"><i class="fas fa-user"></i> 15 </a>
            <a href="#"><i class="fa-solid fa-money-bill-1-wave"></i> 38 </a>
        </div> -->
        <h3 class="title">Atelier  Mezze</h3>
        <p>Découvrez l'art de la cuisine libanaise lors de notre atelier culinaire d'entrées libanaises.</p>
        <a href="concept.php" class="btn" id="mezze">Lire plus</a>
    </div>
</div>

<div class="slide">
    <div class="image">
        <img src="images/atelier_desserts.jpg" alt="">
        <span>Desserts</span>
    </div>
    <div class="content">
        <!-- <div class="icon">
            <a href="#"><i class="fa-regular fa-clock"></i> 2h </a>
            <a href="#"><i class="fas fa-user"></i> 15 </a>
            <a href="#"><i class="fa-solid fa-money-bill-1-wave"></i> 38 </a>
        </div> -->
        <h3 class="title">Atelier Desserts</h3>
        <p>Explorez la délicieuse tradition des desserts libanais lors de notre atelier sucré.</p>
        <a href="concept.php" class="btn" id="desserts">Lire plus</a>
    </div>
</div>

<div class="slide">
    <div class="image">
        <img src="images/atelier_manakish.jpg" alt="">
        <span>Manakish</span>
    </div>
    <div class="content">
        <!-- <div class="icon">
            <a href="#"><i class="fa-regular fa-clock"></i> 2h </a>
            <a href="#"><i class="fas fa-user"></i> 15 </a>
            <a href="#"><i class="fa-solid fa-money-bill-1-wave"></i> 38 </a>
        </div> -->
        <h3 class="title">Atelier Manakish</h3>
        <p>Voyagez au cœur de la cuisine libanaise avec notre atelier culinaire dédié aux manakish.</p>
        <a href="concept.php" class="btn" id="manakish">Lire plus</a>
    </div>
</div>

<div class="slide">
    <div class="image">
        <img src="images/atelier_knefeh.jpg" alt="">
        <span>Knefeh</span>
    </div>
    <div class="content">
        <!-- <div class="icon">
            <a href="#"><i class="fa-regular fa-clock"></i> 2h </a>
            <a href="#"><i class="fas fa-user"></i> 15 </a>
            <a href="#"><i class="fa-solid fa-money-bill-1-wave"></i> 38 </a>
        </div> -->
        <h3 class="title">Atelier Knefeh</h3>
        <p>Plongez dans une aventure gustative unique avec notre atelier dédié aux Knefeh libanais.</p>
        <a href="concept.php" class="btn" id="knefeh">Lire plus</a>
    </div>
</div>

</div>
</div>

</section>



<!-- début section réservation -->

<section class="reservation" id="reservation">
    <div class="content">
        <h1 class="title">Réservez maintenant !</h1>
        <p>Quelque soit l'atelier, vous voulez simplement rencontrer de nouvelles personnes en passant un bon moment ? Pas de soucis, vous pouvez accédez dés à présent au formulaire de réservation pour choisir un créneau.</p>
        <a href="concept.html" class="btn">Prendre un créneau</a>
<!--         <div class="icons-container">
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
        </div> -->
    </div> 
    
    <div class="image">
        <img src="images/reservation.png" alt="">
    </div>
</section>

<!-- fin section réservation -->



<!-- début section blog -->

<section class="blogs" id="blogs">
<div class="heading">
    <span>Blog</span>
    <h2>Posts</h2>
</div>

<div class="swiper blogs-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/about.jpeg" alt="">
                <span>Hommous</span>
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar"></i> 1er mai 2023 </a>
                    <a href="#"><i class="fas fa-user"></i> by admin </a>
                </div>
                <a href="#" class="title">titre blog</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In non iusto cupiditate corrupti, praesentium nihil quos voluptatum deleniti repudiandae reprehenderit adipisci sint dolorem facere dolore aliquam sed, qui quas? Dolorem?</p>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/about.jpeg" alt="">
                <span>Hommous</span>
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar"></i> 1er mai 2023 </a>
                    <a href="#"><i class="fas fa-user"></i> by admin </a>
                </div>
                <a href="#" class="title">titre blog</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In non iusto cupiditate corrupti, praesentium nihil quos voluptatum deleniti repudiandae reprehenderit adipisci sint dolorem facere dolore aliquam sed, qui quas? Dolorem?</p>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/about.jpeg" alt="">
                <span>Hommous</span>
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar"></i> 1er mai 2023 </a>
                    <a href="#"><i class="fas fa-user"></i> by admin </a>
                </div>
                <a href="#" class="title">titre blog</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In non iusto cupiditate corrupti, praesentium nihil quos voluptatum deleniti repudiandae reprehenderit adipisci sint dolorem facere dolore aliquam sed, qui quas? Dolorem?</p>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/about.jpeg" alt="">
                <span>Hommous</span>
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar"></i> 1er mai 2023 </a>
                    <a href="#"><i class="fas fa-user"></i> by admin </a>
                </div>
                <a href="#" class="title">titre blog</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In non iusto cupiditate corrupti, praesentium nihil quos voluptatum deleniti repudiandae reprehenderit adipisci sint dolorem facere dolore aliquam sed, qui quas? Dolorem?</p>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/about.jpeg" alt="">
                <span>Hommous</span>
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar"></i> 1er mai 2023 </a>
                    <a href="#"><i class="fas fa-user"></i> by admin </a>
                </div>
                <a href="#" class="title">titre blog</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In non iusto cupiditate corrupti, praesentium nihil quos voluptatum deleniti repudiandae reprehenderit adipisci sint dolorem facere dolore aliquam sed, qui quas? Dolorem?</p>
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