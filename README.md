# My-Sa

Partie connexion, inscription (insc.php , conn.php) :
INSCRIPTION :

Afin que l’utilisateur puisse se connecter il faut tout d’abord qu’il s’inscrive (dans la page inscription nommée contact-nous.html).

Le formulaire d’inscription est contrôlé par un code javascript. Tant que l’utilisateur n’entre pas des données exactes ou ne remplit pas toutes les cases, il ne sera pas inscrit. Une fois qu’il a rempli les champs dans le bon format, le formulaire sera envoyé vers la page insc.php qui va enregistrer ses données et lui fournir un id créé à partir de ses coordonnées. On utilise des sessions afin de conserver les données de l’utilisateur connecté. Une fois les données insérées dans la base il aura un compte créé et sera dirigé vers la page d’accueil (index.php) , ou il verra son nom et prénom affichés (grâce aux sessions), il y aura de nouvelles fonctionnalités une fois connecté (espace commentaire, devis, profil). Il devra consulter son profil afin de connaître son id pour pouvoir se connecter la prochaine fois. Il y a également un bouton déconnexion qui lui permettra de tuer les sessions et être redirigé vers la page d’accueil de départ (index.html).

CONNEXION :

Pour se connecter il faut d’abord qu’il soit déjà inscrit, il suffit d'entrer son id et son mot de passe, si il se trompe un message d’erreur s’affiche sinon il sera dirigé vers page principale connectée avec l’utilisation des sessions encore une fois (index.php).

PARTIE COMMENTAIRE (index.php, commentaire.php) :
Pour l’espace commentaire il faut être connecté tout d’abord, ensuite il suffit d’entrer un commentaire (ATTENTION : NE PAS METTRE «  ‘ » car la base de donnée ne reconnaît pas ce caractère.). Le commentaire sera ajouté à la base de données et sera ajouté dans la page d’accueil index.php. L’espace commentaire se trouve à la page d’accueil “index.php”. Les commentaires de la personne connectée sont affichés en rouge afin qu’elle puisse reconnaître que c’est bien elle qui a écrit. Il y a également une date au moment où l'utilisateur entre un commentaire qui s’affiche afin de savoir à quel moment la personne a laissé le commentaire.

PARTIE DEVIS (devis.php, deviss.php) :
 

On a créé un tableau dans lequel on peut cocher les produits qu’on veut et insérer la quantité voulue. Chaque valeur de la case quantité est transférée vers la page deviss.php et les cases cochées sont enregistrées dans un tableau “a” et renvoyées vers deviss.php grâce à la méthode POST (le tableau aura pour valeur les ids des produits cochées) . Afin de créer votre devis il faut que la quantité soit différente de 0 sinon le devis sera vide et il faut également cocher les cases des produits dont vous souhaitez connaitre le prix. Une fois cela fait vous allez être redirigé vers une page qui affiche le nombre de produits distincts sélectionnés ainsi que le coût total et également le nombre total de produits. Vous pourrez connaître le prix à l'unité du produit ainsi que le prix selon les quantités choisies. On récupère ce prix grâce à la base de données se trouvant dans la table produit.

 

SESSION (toutes les pages php) :
 

Nous avons utilisé les sessions afin de conserver les données de l’utilisateur et pouvoir s’en servir pour pouvoir faire des commentaires, un devis personnalisé ainsi que le profil de l’utilisateur. Lorsque l’utilisateur se connecte ou bien s’inscrit, les sessions sont mises en place et au moment où il se déconnecte elles sont tuées. 

