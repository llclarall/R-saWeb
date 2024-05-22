<?php 
require 'connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HH - Concept</title>
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <a class="evitement" href="#concept">Aller au contenu</a>
        
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"> </i>
            </label>
            <a href="index.php" class="logo">Hommade Hommous</a>
            <ul>
                <li><a class="a_nav" href="index.php">Home</a></li>
                <li><a href="about.php" class="a_nav">Nous</a></li>
                <li><a href="concept.php" class="active a_nav">Nos Ateliers</a></li>
                 <li><a href="contact.php" class=" a_nav">Contact</a></li>
            </ul>
            </nav>
        </section>
    </header>

    <!-- fin header -->
    


<!-- début section concept -->


    <img class='concept-header' src="images/concept_header.jpg" alt="">
    
    <section class="concept" id="concept">  

    <div class="heading2">
        <span>PERSONNALISEZ VOS MOMENTS DU QUOTIDIEN</span>
        <h1>Hommade Hommous, comment ça marche ?</h1>
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



<section class="ateliers_2" id="ateliers_2">
    
<div class="lineh">
        <div class="line"></div>
        <h2 id="concept">Nos Ateliers</h2>
        <div class="line"></div>
</div>
    <br>

<!-- barre de recherche en php -->

<form method="post">
    <label>Rechercher :<input type="search" name="s" placeholder="mezze, knefeh,..."></label>
    <input type="submit" name="submit" value="Rechercher">
</form>

<?php
if(isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $db->prepare("SELECT * FROM hh_atelier WHERE activité = '$str'");
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
}
?>


<!-- filtre en php -->

<form action="concept.php">

<span>Filtrer :</span>
<select name="duree" id="duree">
<?php 
$requete = "SELECT DISTINCT * FROM hh_atelier ";
$stmt = $db->query($requete);
$resultat = $stmt -> fetchall();
foreach ($resultat as $atelier){
echo "<option value='duree'>".$atelier["duree"];
}
?>
</select>

<select name="duree" id="duree">
<?php 
$requete = "SELECT * FROM hh_atelier";
$stmt = $db->query($requete);
$resultat = $stmt -> fetchall();
foreach ($resultat as $atelier){
echo "<option value='prix'>".$atelier["prix"];
}
?>
</select>

<input type="submit" value="Valider">
<br><br>
</form>


<!-- tri en js -->
<select id="critere">
  <option value="">---</option>
  <option value="prix">Prix</option>
  <option value="duree">Durée</option>
</select>
<button id="triButton">Trier</button>

<div class="swiper" id="AteliersList">
<?php 
$requete = "SELECT * FROM hh_atelier";
$stmt = $db->query($requete);
$resultat = $stmt -> fetchall(PDO::FETCH_ASSOC);
foreach ($resultat as $hh_atelier){
    /* echo "<option value='realisateur'>".$film["prenom"]." ".$film["nom_realisateur"]."</option>"; */
    echo '<div class="slide" data-prix="'.$hh_atelier["prix"].'" data-duree="'.$hh_atelier["duree"].'">
    <div class="image">
        <img src="'.$hh_atelier["img"].'" alt="">
        <span>'.$hh_atelier["nom_img"].'</span>
    </div>
    <div class="content">
        <div class="icon">
            <span name="duree" id="prix"><i class="fa-regular fa-clock" ></i> '.$hh_atelier["duree"].'</span> 
            <span><i class="fas fa-user"></i> '.$hh_atelier["capacite"].' </span>
            <span name="prix" id="prix"><i class="fa-solid fa-money-bill-1-wave" ></i> '.$hh_atelier["prix"].' </span>
        </div>
        <h3 class="title">'.$hh_atelier["activité"].'</h3>
        <p>'.$hh_atelier["description"].'</p>
        <a href="reserve.php?id_atelier='.$hh_atelier["id_atelier"].'" class="btn">Réserver</a>
    </div>
</div>';
}
?>


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