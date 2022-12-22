<?php
//GHULAM Meryam 12005854 TD-01
//DRICI Katia 12005946 TD-01
//ABDUL Samra	12009267 TD-01
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Acceuil | My&Sa </title>
        <link rel='stylesheet' href='home.css'>
    
    </head>


<body>
    <nav>
        <h1>My & Sa</h1>
		<?php
			$nom=$_SESSION['nom'];
			$prenom=$_SESSION['prenom'];
			$id=$_SESSION['id'];
			$date=$_SESSION['date'];
			$adr=$_SESSION['adr'];
			$num=$_SESSION['num'];
			
		echo "<h2 style='color:black'>$nom $prenom</h2>";
		?>
        <div class="naviguation">
            <a href="index.php">Accueil</a>
            <a href="page/menu/produit.php">Nos produits</a>
			<a href="devis.php">Devis</a>
			<a href="profil.php">Profil</a>
			<a href="deconnexion.php">Déconnexion</a>
           
			
        </div>
    </nav>
    <header>
        <h1>My & Sa</h1>
        <h4>BOULANGERIE - PÂTISSERIE ORIGINAL</h4>
		
    </header>


<section class="corps" id="corps">


    <!--grille photo nouveauté-->   
    <section class="bests-items" id="bests-items">
        <h2 class="section-title">
            Nouveauté de Noël</h2>
        <div class="best-plats" >
            <a class="box plat1 no-grid" href="page/menu/page2/Patisserie.php#pp">
                <div class="details">
                    <p class="name">Buche Spéciale : paliné, crumble</p>
                    <p class="price">Pour 8 personnes</p>
                </div>
            </a>
            <a class="box plat2 no-grid" href="page/menu/page2/Patisserie.php#pp">
                <div class="details">
                    <p class="name">Buche De Noël : à la fôret noire</p>
                    <p class="price">Pour 4 personnes</p>
                </div>
            </a>
        </div>
    </section> 

    

    <!-- Slideshow container -->
            <!--image slider start-->
        <section class="bests-items" id="bests-items">
            <h2 class="section-title">
                Notre séléction de produits</h2>
            
            <section class="myslide" >
                
                <div class="text-slide">
                    
                    <h3>Un coup de mou? Besoin d'énérgie.
                        Une Envie Particulière ?</h3>
                    <centre>
                        Découvrer toute notre gamme de produit.<br> 
                        (par <a class="ici" href="page/menu/produit.php">ICI</a>)
                    </centre>
                </div>
                <div class="slider">
                    <div class="slides">
                        <!--radio buttons start-->
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <!--radio buttons end-->
                        <!--slide images start-->
                        <div class="slide first">
                            <a href="page/menu/produit.php#p"><img src="https://e-city.s3.amazonaws.com/images/files/000/005/263/square/Constanti-Baguettebio-01.jpg?1485530427" alt=""></a>
                        </div>
                        <div class="slide second">
                            <a href="page/menu/produit.php#v"><img src="https://www.foricher.com/sites/default/files/styles/720x720/public/stage_viennoiserie_croissant_1.jpg?itok=xVun7nGT" alt=""></a>
                        </div>
                        <div class="slide third">
                            <a href="page/menu/produit.php#pat"><img src="https://www.academiedugout.fr/images/4141/501-307/paris_brest.eps.jpg?poix=50&poiy=50" alt=""></a>
                        </div>
                        <div class="slide fourth">
                            <a href="page/menu/produit.php#s"><img src="https://media.istockphoto.com/photos/sandwich-on-wood-background-picture-id485656529?k=6&m=485656529&s=612x612&w=0&h=PK6aiX5cT_jZL0qq2gjDxWV_zHaDQS8v8_y4Vc9wvxQ=" alt=""></a>
                        </div>
                        <!--slide images end-->
                        <!--auto naviguation start-->
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                        <!--auto naviguation end-->
                    </div>
                    <!--manual naiguation start-->
                    <div class="navigation-manual" id="myslide">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                    <!--manual naiguation end-->
                </div>
                <!--image slider start-->
            </section>
        </section>
            <script type="text/javascript">
                var counter = 1;
                setInterval(function() {
                    document.getElementById('radio'+counter).checked = true;
                    counter ++;
                    if (counter > 4){
                        counter = 1;
                    }
                }, 5000);
            </script>



    <!--grille photo Commandes quantitative Spéciales-->   
    <section class="all-plats" id="all-plats">
        <h2 class="section-title">
            Création sous Commandes
        </h2>
        <div class="plat-grid">
            <a class="grid1 box" href="page/contact/contact-nous.php">
                <div class="details">
                    <p class="name">Verrines aux marrons</p>
                    <p class="price">Pour les fêtes d'hiver</p>
                </div>
            </a>
            <a class="grid2 box" href="page/contact/contact-nous.php">
                <div class="details">
                    <p class="name">Fine bouchées</p>
                    <p class="price">Tartelette saumon crème fraiche</p>
                </div>
            </a>
            <a class="grid3 box" href="page/contact/contact-nous.php">
                <div class="details">
                    <p class="name">Macarons - amuse bouche</p>
                    <p class="price">Chocolateux</p>
                </div>
            </a>
            <a class="grid4 box" href="page/contact/contact-nous.php">
                <div class="details">
                    <p class="name">Magnum - cake</p>
                    <p class="price">des glaces pas très glacés</p>
                </div>
            </a>
            <a class="grid5 box" href="page/contact/contact-nous.php">
                <div class="details">
                    <p class="name">Verrines Fruité</p>
                    <p class="price">aux oranges d'automne</p>
                </div>
            </a>
            <a class="grid6 box" href="page/contact/contact-nous.php">
                <div class="details">
                    <p class="name"> dessert</p>
                    <p class="price">Figue - pistachios</p>
                </div>
            </a>
        </div>
    </section> 



   





        <!--grille photo Surmesure-->   
        <section class="bests-items" id="bests-items">
            <h2 class="section-title">
                Vos Commandes Perso (sur commande)
            </h2>
            
            <div class="best-plats">
                <a class="box plat3 no-grid" href="page/contact/contact-nous.php">
                    <div class="details">
                        <p class="name">Girl Birthday cake</p>
                        <p class="price">94,99€</p>
                    </div>
                </a>
                <a class="box plat4 no-grid" href="page/contact/contact-nous.php">
                    <div class="details">
                        <p class="name">Engagement cake</p>
                        <p class="price">124,99€</p>
                    </div>
                </a>
            </div>
        
 
<section class="commentaire" id="commentaire" >
<h2 class="section-title">
                Ajoutez votre avis sur notre boulangerie
            </h2>
	 <center>
<form method="POST"  action="commentaire.php">
<textarea name="commentaire" style="width:400px; height:100px;" value=""> </textarea><br>
<input type="submit" value="envoyer"  method="POST"  action="commentaire.php" />
</form></center>
</section>
<br><br>
	 
<?php

require "../BD.php";				//On appelle les variables qui sont stocké dans le fichier BD.php qui vont permettre de nous connecter à la base

$idcon=new mysqli($serveur,$user,$mdpp,$bd,$port);		//connexion à la base 
 if ( $idcon->connect_errno ) {		//on test si la connexion est réussi
 exit ("Impossible de se connecter à la base de données à cause de l'erreur suivant : ".$idcon->connect_error."." ) ;
 };
 
 $id=$_SESSION['id'];					//on utilise les session pour recuperes l'id de l'utilisateur
 
$sqll="SELECT * FROM `comm` order by `idcomm` DESC";		//on fait une requete qui va recuperer tout les commentaires dans l'odre du plus recent au plus ancien (car cle et auto-incrementer donc la plus petite clé et la plus ancienne)
$result=$idcon-> query($sqll);							//recupere la requete dans result
$result->data_seek(0);		
echo "<table border='1' cellspacing='0' width='100%'>";					//creation d'un tableau		
	while ($row = $result->fetch_assoc()){		//parcours les resultats de la requete
		echo "<tr>";
		echo "<center>";
		if ($id==$row['idutil']){			//si le id de la requete n°row est le meme que l'id de l'utilisateur connecter on l'affiche en brown son nom
			echo "<td>";
			echo "<p style='color:brown'><b>".$row['date']."<br>";		//recupere la date du commentaire
			echo $row['idutil']." : </b>";						//recuepere l'id du user
			echo "</td><td>";
			echo "<br>";
			echo $row['comm']."</p>";						//recupere le commentaire
			echo "</td>";
		}
		else {													//on procede de la meme maniere
			echo "<td>";
			echo "<p style='color:black'><b>".$row['date']."<br>";
			echo $row['idutil']." : </b>";
			echo "</td><td>";
			echo "<br>";
			echo $row['comm']."</p>";
			echo "</td>";
		}
		echo "</center>";
		echo "</tr>";
	}
echo "</table>";	
$idcon-> close();
?>
</section>
    </section>


<!---------------------BAS DE PAGE---------------------------->

    <footer id="contact">

        <div class="contenu-footer">
            <div class="bloc footer-services">
                <h3>My & Sa</h3>
                <img src="img/mysa.jpg" alt="logo entreprise" class="logo">
            </div>
            <div class="bloc footer-contact">
                <h3>Restons en contact</h3>
                <p>01-33-58-23-xx</p>
                <p>supportclient@contact.com</p>
                <p>6 rue de l'invention, Paris VII, 75007</p>
            </div>
            <div class="bloc footer-horaires">
                <h3>Les Horaires</h3>
                <ul class="liste-horaires">
                    <li>❌ Lun Fermé</li>
                    <li>❌ Mar Fermé</a></li>
                    <li>✔️ Mer 10h-19h</a></li>
                    <li>✔️ Jeu 10h-19h</a></li>
                    <li>✔️ Ven 15h-20h</a></li>
                    <li>✔️ Sam 13h-21h</li>
                    <li>✔️ Dim 13h-21h</li>
                </ul>
            </div>
            <div class="bloc footer-medias">
                <h3>Nos Réseaux</h3>
                <ul class="liste-medias">
                    <li><a href="https://www.instagram.com"><img  alt="" src="img/logo1.jpg"/>Instagram/My&Sa</a></li>
                    <li><a href="https://www.whatsapp.com"><img alt="" src="img/logo2.jpg"/>What'sApp/services</a></li>
                </ul>
            </div>
            </div>
        </div>
            
    </footer>

</body>
</html>
