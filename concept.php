<?php
require 'connexion.php';

// Récupère les données du formulaire de recherche et de tri 
$prix = isset($_POST['prix']) ? $_POST['prix'] : '';
$search = isset($_POST['search']) ? $_POST['search'] : '';
$duree = isset($_POST['duree']) ? $_POST['duree'] : '';

// Construit la requête SQL en fonction des filtres et de la recherche 
$sql = "SELECT hh_atelier.* FROM hh_atelier
        LEFT JOIN hh_calendrier ON hh_atelier.id_atelier = hh_calendrier.fk_atelier
        WHERE 1=1";
$params = array();

// Ajoute les conditions de recherche et de tri à la requête
// Si le prix est défini et que le bouton "Tout voir" n'est pas cliqué alors on ajoute la condition de prix à la requête
if (!empty($prix) && !isset($_POST['tout_voir'])) {
    $sql .= " AND hh_atelier.prix = :prix";
    // Ajoute le paramètre de prix au tableau des paramètres
    $params[':prix'] = $prix;
}

// Si la recherche est définie alors on ajoute la condition de recherche à la requête
if (!empty($search)) {
    $sql .= " AND nom_img LIKE :search";
    // Ajoute le paramètre de recherche au tableau des paramètres
    $params[':search'] = '%' . $search . '%';
}

// Si la durée est définie alors on ajoute la condition de durée à la requête
if (!empty($duree)) {
    if ($duree == 'moins_de_2h') {
        $sql .= " AND hh_atelier.duree < 2";
    } elseif ($duree == '2h_ou_plus') {
        $sql .= " AND hh_atelier.duree >= 2";
    }
}

$sql .= " GROUP BY hh_atelier.id_atelier";

/* Prépare et exécute la requête */
$sth = $db->prepare($sql);
$sth->execute($params);
// Récupère les résultats de la requête sous forme d'objets 
$results = $sth->fetchAll(PDO::FETCH_OBJ);
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
<link rel="icon" href="images/favicon.ico" />
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
        <span class="sr-only">Burger Menu</span><i class="fas fa-bars"></i>
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
                <h2>Réservez un de nos ateliers de cuisine interactifs</h2>
                <p>Sucré, salé, rapide, plus long, vous avez l'embarras du choix avec nos ateliers tous plus riches en expérience les uns que les autres.</p>
            </div>
        </div>
    
        <div class="card">
            <img src="images/number-2.png" alt="">
            <div class="card-content">
                <h2>Venez concocter votre version de la cuisine libanaise </h2>
                <p>Vous pourrez découvrir les multiples secrets des recettes libanaises, tout en y ajoutant votre propre fantaisie.</p>
            </div>
        </div>
    
        <div class="card">
            <img src="images/number-3.png" alt="">
            <div class="card-content">
                <h2>Rencontrez vos futurs meilleurs amis</h2>
                <p>Pas de lieu plus propice à de nouvelles rencontres qu'autour de poêles et de condiments alors n'attendez plus, tentez l'aventure !</p>
            </div>
        </div>
    </div>
</section>
<!-- fin section concept -->


<!-- début section ateliers -->

<section class="ateliers_2" id="ateliers_2">
    <div class="lineh">
        <div class="line"></div>
        <h2 id="concept">Nos Ateliers</h2>
        <div class="line"></div>
    </div>
    <br>

    <div class="fonctions">

        <!-- barre de recherche en php -->
        <div class="search_container">
            <form method="post">
                <label>ATELIER<input type="search" name="search" placeholder="mezze, knefeh,..." class="search"></label>
                <input type="submit" name="submit" value="Rechercher" class="btn">
            </form>
        </div>

        <!-- tri en js -->
        <div class="tri_container">
            <select id="critere" class="tri">
                <option value="">---</option>
                <option value="prix">Prix</option>
                <option value="duree">Durée</option>
            </select>
            <button id="triButton" class="btn">Trier</button>
        </div>
    </div>

    <!-- filtre en php -->
    <div class="filtre_container">
        <form action="concept.php" method="POST">
            
            <label for="prix"><span>Filtrer :</span>
                <select name="prix" id="prix" class="filtre">
                    <option value="">Par prix</option>
                    <?php
                    // Requête pour récupérer les prix sans doublons des ateliers
                    $requete = "SELECT DISTINCT prix FROM hh_atelier ORDER BY prix";
                    $stmt = $db->query($requete);
                    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    // Affiche les prix dans la liste déroulante
                    foreach ($resultat as $atelier){
                        echo "<option value='".($atelier["prix"])."'>".($atelier["prix"])."</option>";
                    }
                    ?>
                </select>
            </label>

            <select name="duree" id="duree" class="filtre">
                <option value="">Par durée</option>
                <option value="moins_de_2h">Moins de 2h</option>
                <option value="2h_ou_plus">2h ou plus</option>
            </select>
            <input type="submit" name="filtrer" value="Valider" class="btn">

            <br>
            <!--
             * Ce code vérifie si la variable $prix ou $search n'est pas vide.
             * Si l'une des deux variables n'est pas vide, un bouton "Tout voir" est affiché pour réafficher tous les ateliers.
            -->
            <?php if (!empty($prix) || !empty($search) || !empty($duree)): ?>
                <input type="submit" name="tout_voir" value="Tout voir" class="btn tout_voir">
            <?php endif; ?>

        </form>
    </div>

<div class="swiper" id="AteliersList">

<?php
if ($results) {
    foreach ($results as $row) {
        echo '<div class="slide" data-prix="' . ($row->prix) . '" data-duree="' . ($row->duree) . '">
                <div class="image">
                    <img src="' . ($row->img) . '" alt="">
                    <span>' . ($row->nom_img) . '</span>
                </div>
                <div class="content">
                    <div class="icon">
                        <span name="duree" id="duree"><i class="fa-regular fa-clock"></i> ' . ($row->duree) . '</span> 
                        <span><i class="fas fa-user"></i> ' . ($row->capacite) . ' </span>
                        <span name="prix" id="prix"><i class="fa-solid fa-money-bill-1-wave"></i> ' . ($row->prix) . ' </span>
                    </div>
                    <h3 class="title">' . ($row->activité) . '</h3>
                    <p>' . ($row->description) . '</p>';

            // Récupère les horaires des ateliers 
            $atelier = $row->id_atelier;
            $requete = "SELECT * FROM hh_calendrier WHERE fk_atelier = :atelier";
            $stmt = $db->prepare($requete);
            // Lie le paramètre :atelier à la variable $atelier
            $stmt->bindParam(':atelier', $atelier);
            $stmt->execute();
            // Récupère les résultats de la requête sous forme de tableau associatif
            $resultat = $stmt->fetchAll();

            // Affiche les horaires des ateliers
            foreach ($resultat as $hh_calendrier) {
                echo '<span class="horaires"> > ' . ($hh_calendrier["heure"]) . '</span>'; 
            }

        echo '<a href="reserve.php?id_atelier=' . ($row->id_atelier) . '" class="btn">Réserver</a>
            </div>
        </div>';
    }   
} else {
    echo '<p class="no_result">Aucun résultat trouvé.</p>';
}
?>


    </div>
    
</section>
<!-- fin section ateliers -->

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
             <p><a href="mentions.html">Mentions Légales</a></p>
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
