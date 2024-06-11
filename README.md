

Lien OPQUAST :

https://docs.google.com/spreadsheets/d/1xJp7zFoTf40agtWX4Q6gbN8B9nnwtJ3bFYrwoKPYORA/edit?usp=sharing

-----------------------------------------------------------------------

Lien de mon site hébergé sur o2switch : 

https://resaweb.moubarak.butmmi.o2switch.site/

-------------------------------------------------------------------------


Documentation WAMP (localhost):

1. Exécuter le fichier d'installation après l'avoir téléchargé depuis leur site, et suivre les instructions à l'écran pour installer Wamp sur son ordinateur.
2. Une fois installé,  lancer WAMP en cliquant sur son icône sur le bureau. Plusieurs fenêtres vont pop-up, c'est normal.
3. Placer les fichiers du site dans le répertoire "www" de l'installation WAMP. Ce répertoire se trouve généralement dans le dossier d'installation de Wamp sur le disque dur.
4. Ouvrir son navigateur web et accéder à l'adresse "localhost" ou "127.0.0.1". On y voit la page d'accueil de WAMP.
5. Pour accéder à mon site, ajouter le nom du dossier du site à l'URL. Donc dans le navigateur, tapper l'adresse suivante : http://localhost/SAE203

-------------------------------------------------------------------------

Hébergement sur o2switch:

1. Se connecter à son compte o2switch étudiant.
2. Tout d'abord, créer un domaine pour donner une URL à son site et accéder au dossier où son site se trouvera (donc public_html/resaweb).
3. Ensuite, créer une base de données pour y importer la base de données en local, et lui assigner un utilisateur à qui l'on donne tous les privilèges.
4. Aller dans le répertoire public_html pour y placer son dossier resaweb, où l'on va transférer tous les fichiers du site en drag and drop.
5. Mettre à jour la ligne de connexion à la base de données dans son fichier de configuration (par ex connexion.php) en changeant le nom de la bdd, le mot de passe et le username (ceux qu'on utilise pour se connecter au cpanel)
6. Tester son site hébergé pour s'assurer que les fichiers sont correctement transférés et que les permissions sont définies correctement.

Pour cela il suffit de taper dans le navigateur le lien de son site : https://resaweb.moubarak.butmmi.o2switch.site/


