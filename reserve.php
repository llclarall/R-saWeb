<?php 
require 'connexion.php';

// Récupère l'ID de l'atelier à partir de l'URL
$atelier = $_GET["id_atelier"];

// Vérifie si le formulaire a été soumis et récupère les données du formulaire
if (isset($_GET["submit"])) {
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $mail = $_GET["mail"];
    $date = $_GET["date"];
    $creneau = $_GET["creneaux"];
    $atelier = $_GET["id_atelier"];

    // Convertir la date au format jour/mois/année
    $dateObject = DateTime::createFromFormat('Y-m-d', $date);
    $date = $dateObject->format('d/m/Y');

// Liste des domaines à bloquer (mails temporaires ou spam) 
$blacklist = [
    "uooos.com", "doolk.com", "nthrw.com", "bbitq.com", "ckptr.com", "alldrys.com", 
    "moabuild.com", "moongit.com", "20minutemail.it", "diolang.com", "aosod.com", 
    "huleos.com", "sharklasers.com", "guerrillamail.info", "grr.la", "guerrillamail.biz", 
    "guerrillamail.com", "guerrillamail.de", "guerrillamail.net", "guerrillamail.org", 
    "guerrillamailblock.com", "pokemail.net", "spam4.me", "musiccode.me", "lyricspad.net", 
    "citmo.net", "vusra.com", "gufum.com", "best-john-boats.com", "pirolsnet.com", 
    "trickyfucm.com", "entipat.com", "smartinbox.online", "goonby.com", "plexfirm.com", 
    "neixos.com", "10mail.org", "firste.ml", "zeroe.ml", "dropmail.me", "vintomaper.com", 
    "labworld.org", "fillallin.com", "dockleafs.com", "mailsac.com", "mails.omvvim.edu.in", 
    "onetimeusemail.com", "midiharmonica.com", "fthcapital.com", "yopmail.com", 
    "crazymailing.com", "exbts.com", "wemel.site", "mybx.site", "emeil.top", "mywrld.top", 
    "matra.top", "memsg.site", "emailnax.com", "emailbbox.pro", "inboxbear.com", 
    "getnada.com", "guysmail.com", "trashmail.fr", "trashmail.se", "my10minutemail.com"
];

// Extraire le domaine de l'email de l'utilisateur en repérant la chaîne de caractères après le @
$email_domain = substr(strrchr($mail, "@"), 1);

// Vérifie si le domaine de l'email est dans la liste noire et affiche un message d'erreur s'il l'est
if (in_array($email_domain, $blacklist)) {
    echo "<script>alert('Les adresses e-mail temporaires ne sont pas autorisées. Veuillez utiliser une adresse e-mail valide.');</script>";
} else {

    try {
        // Démarrer une transaction pour effectuer plusieurs requêtes SQL
        $db->beginTransaction();

        // 1ère requête pour insérer l'utilisateur s'il n'existe pas déjà (avec le mail comme clé primaire)
        $sql = "INSERT IGNORE INTO hh_user (nom_user, prenom_user, mail_user) VALUES (:nom, :prenom, :mail)";

        // Prépare la requête SQL pour l'exécution et lie les valeurs
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();


        // 2ème requête pour insérer la réservation dans la bdd
        $sql2 = "INSERT INTO hh_reservation (date_reservation, creneau_reservation, atelier, fk_user) VALUES (:jour, :creneau, :atelier, :mail)";
        $stmt2 = $db->prepare($sql2);
        $stmt2->bindParam(':jour', $date);
        $stmt2->bindParam(':creneau', $creneau);
        $stmt2->bindParam(':atelier', $atelier);
        $stmt2->bindParam(':mail', $mail);
        $stmt2->execute();

        // Commit de la transaction dans la bdd si les requêtes ont été exécutées avec succès
        $db->commit();
        

        // Récupére le nom de l'activité pour l'envoi de l'email
        $requete = "SELECT activité FROM hh_atelier WHERE id_atelier = $atelier";
        $stmt = $db->query($requete);
        $resultat = $stmt->fetch();
        $to = $mail;
        $subject = "Confirmation de réservation";
        $message = "
        <html>
        <head>
            <title>Confirmation de réservation</title>
        </head>
        <body>
            <p>Bonjour $prenom $nom,</p>
            <p>Merci pour votre réservation à Hommade Hommous !</p>
            <p>Voici les détails de votre réservation :</p>
            <ul>
                <li>Activité : {$resultat['activité']}</li> 
                <li>Date : $date</li>
                <li>Créneau : $creneau</li>
            </ul>
            <p>Nous avons hâte de vous voir !</p>
        </body>
        </html>";

        // En-têtes pour envoyer le mail au format HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: HommadeHommous@example.com' . "\r\n";

        

        // Envoi du mail pour l'utilisateur qui a réservé un atelier (règle 83 Opquast)
        if(mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Réservation confirmée ! Vous recevrez bientôt un e-mail de confirmation.');</script>";
            // Redirige vers la page d'accueil après traitement (règle 82 Opquast) 
            echo "<script>setTimeout(function() { window.location.href = 'index.php'; });</script>";
        } else {
            echo "L'envoi de l'email a échoué.";
        }
         
        // Gestion des exceptions pour les erreurs SQL ou autres erreurs possibles lors de la réservation 
        // $e est une variable qui contient l'exception
        } catch (Exception $e) {
        // $db->rollBack() annule toutes les modifications apportées à la base de données
        $db->rollBack();
        echo "<script>alert('Erreur lors de la réservation : " . 
        $e->getMessage() . "');</script>";
    }
}
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
<!-- début header -->
    <header>
        <section class="header">
            <nav>
            <a class="evitement" href="#formulaire">Aller au contenu</a>
        
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
            <span class="sr-only">Burger Menu</span><i class="fas fa-bars"> </i>
            </label>
            
            <a href="index.php" class="logo love-ya-like-a-sister-regular">Hommade Hommous</a>
            <ul>
                <li><a class="a_nav" href="index.php">Home</a></li>
                <li><a href="about.php" class="a_nav">Nous</a></li>
                <li><a href="concept.php" class="a_nav active">Nos Ateliers</a></li>
                <li><a href="contact.php" class="a_nav">Contact</a></li>
            </ul>
            </nav>
        </section>
    </header>
    <!-- fin header -->
    



<button class="back-button">
    <span class="sr-only">Retour</span><i class="fas fa-arrow-left"></i>
</button>

<!-- début section formulaire réservation -->

<section class="formulaire" id="formulaire">

<div class="heading2">
        <span>Réservez votre créneau</span>
            <?php 
            // Récupère le nom de l'atelier selon son id pour l'afficher dans le titre de la page
            $requete = "SELECT activité FROM hh_atelier WHERE id_atelier = $atelier";
            // Exécute la requête SQL
            $stmt = $db->query($requete);
            // Récupère le résultat de la requête
            $resultat = $stmt->fetch(); {
                echo '<h1 class="love-ya-like-a-sister-regular">'.$resultat['activité'].'</h1>'; 
            }?>   
</div>

<!-- Formulaire de réservation -->
<div class="form">
    <form action="reserve.php" method="get" autocomplete="on">
        <p>tous les champs sont obligatoires</p>
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
                <?php 
                // Récupère les créneaux disponibles pour l'atelier sélectionné dans la bdd et les affiche dans une liste déroulante
                $requete = "SELECT * FROM hh_calendrier WHERE fk_atelier = :atelier";
                $stmt = $db->prepare($requete);
                $stmt->bindParam(':atelier', $atelier);
                $stmt->execute();
                $resultat = $stmt->fetchAll();
                foreach ($resultat as $hh_calendrier) {
                    echo '<option value="'.$hh_calendrier["heure"].'">'.$hh_calendrier["heure"].'</option>'; 
                }
                ?>
            </select>
            </label>
        </div>
        <!-- Champ caché pour envoyer l'id de l'atelier avec le formulaire -->
        <input type="hidden" name="id_atelier" value="<?php echo 
        htmlspecialchars($atelier); ?>">
        <input type="submit" name="submit" class="btn" value="Réserver">
        
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
