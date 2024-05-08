<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HH - Concept</title>
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
            <a class="evitement" href="#home">Aller au contenu</a>
        
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"> </i>
            </label>
            <a href="index.php" class="logo">Hommade Hommous</a>
            <ul>
                <li><a class="a_nav" href="index.php">Home</a></li>
                <li><a href="about.php" class="a_nav">Nous</a></li>
                <li><a href="concept.php" class="active a_nav">Nos Ateliers</a></li>
                 <li><a href="reserve.php" class=" a_nav book_btn">Réserver</a></li>
            </ul>
            </nav>
        </section>
    </header>

    <!-- fin header -->
    

    <?php 
$db = new PDO('mysql:host=localhost;dbname=hommade_hommous;port=3306;charset=utf8', 'root', ''); 
?>


<!-- début section concept -->


    <img class='concept-header' src="images/concept_header.jpg" alt="">
    
    <section class="concept">  

    <div class="heading2">
        <span>PERSONNALISEZ VOS MOMENTS DU QUOTIDIEN</span>
        <h3>Hommade Hommous, comment ça marche ?</h3>
    </div>
    
    <div class="card-container">
        <div class="card">
            <img src="images/number-1.png" alt="">
            <div class="card-content">
                <h1>Réservez le créneau qui vous convient</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam non delectus quas blanditiis officiis fugiat, pariatur ad in ut, et voluptatum.</p>
            </div>
        </div>
    
        <div class="card">
            <img src="images/number-2.png" alt="">
            <div class="card-content">
                <h1>Réservez le créneau qui vous convient</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam non delectus quas blanditiis officiis fugiat, pariatur ad in ut, et voluptatum.</p>
            </div>
        </div>
    
        <div class="card">
            <img src="images/number-3.png" alt="">
            <div class="card-content">
                <h1>Réservez le créneau qui vous convient</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam non delectus quas blanditiis officiis fugiat, pariatur ad in ut, et voluptatum.</p>
            </div>
        </div>
    </div>
</section>




<!-- début section ateliers -->



<section class="ateliers" id="ateliers">
    
<div class="lineh">
        <div class="line"></div>
        <h2 id="concept">Nos Ateliers</h2>
        <div class="line"></div>
</div>
    <br>

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