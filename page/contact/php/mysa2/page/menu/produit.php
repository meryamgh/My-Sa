<?php
//GHULAM Meryam 12005854 TD-01
//DRICI Katia 12005946 TD-01
//ABDUL Samra	12009267 TD-01
	session_start();
	?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Nos Produits | My & Sa</title>
    <link rel="stylesheet" type="text/css" href="produits.css">
    <link rel="stylesheet" type="text/css" href="../nav.css">

    
</head>
<body>

    <nav class="nav">
        <h1>My & Sa</h1>
		<?php
			$nom=$_SESSION['nom'];
			$prenom=$_SESSION['prenom'];
			
		echo "<h2 style='color:black'>$nom $prenom</h2>";
		?>
        <div class="naviguation">
            <a href="../../index.php">Accueil</a>
            
            <a href="produit.php#product">Nos produits</a>
			<a href="../../devis.php">Devis</a>
			<a href="../../profil.php">Profil</a>
			<a href="../../deconnexion.php">Déconnexion</a>
			
        </div>
    </nav>

    <div class="baniere">
        <!--<img src="fond2.jpg" alt="image">-->
        <div class="texte_centrer"><u><b><h3>NOS PRODUITS</h3></u></b>
        </div>
    </div>
<!--BANIERE-->
<section>

        <div class="link" id="product">
                <a href="page2/pain.php#pp"><div class="item" id="pain">
                <img src="photo_produit_1/pain.jpg"><br>Pain</div></a>

                <a href="page2/viennoiserie.php#pp"><div class="item" id="viennoiserie">
                <img src="photo_produit_1/vienoiserie.jpg"><br>Viennoiseries</div></a>

                <a href="page2/Patisserie.php#pp"><div class="item" id="patisserie">
                <img src="photo_produit_1/patisserie.jpg"><br>Pâtisserie</div></a>
                
                <a href="page2/sale.php#pp"><div class="item" id="sale">
                <img src="photo_produit_1/pizza.jpg"><br>Le Salé</div></a>
        </div>
</section>
<!--Contenu-->
<div class="contenant2" id="p">
    <div class="cadre">
    <img src="https://www.maryseetcocotte.com/wp-content/uploads/2016/12/pain-au-levain-lin-940x626.jpg"> <!--photo_produit_1/imagepa2.jpg-->
    <div class="text"><h1>Pain</h1><br><p>Découvrez toutes nos variétées de Pains & Pains spéciaux.</p><a href="page2/pain.php#pp"><button>Découvrir</button></a></div>
    </div><br><br><br>
</div>
<div class="contenant" id="v">
    <div class="cadre">
    <img src="https://www.eucomosim.com/wp-content/uploads/2017/11/XVMc87faad8-d675-11e6-b565-a1f91d4e67bf.jpg"> <!--photo_produit_1/imagev.jpg-->
    <div class="text"><h1>Viennoiserie</h1><br><p>Par gourmandise, avec des amis ou de la famille, savourez nos Viennoiseries.</p><a href="page2/viennoiserie.php#pp"><button>Découvrir</button></a></div>
    </div><br><br><br>
</div>
<div class="contenant2" id="pat">
    <div class="cadre">
    <img src="photo_produit_1/imagep.jpg"> <!--photo_produit_1/imagep.jpg-->
    <div class="text"><h1>Pâtiserie</h1><br><p>Pour toutes les occasions, faites vous plaisir avec notre séléction de Pâtisserie.</p><a href="page2/Patisserie.php#pp"><button>Découvrir</button></a></div>
    </div><br><br><br>
</div>
<div class="contenant" id="s">
    <div class="cadre">
    <img src="photo_produit_1/images.jpg"> <!--photo_produit_1/images.jpg--> <!--https://thumbs.dreamstime.com/b/baguette-sandwich-18673973.jpg-->
    <div class="text"><h1>Le salé</h1><br><p>Pour ceux qui souhaite rester healthy.. Voici notre séléction de salé pour le MIDI !</p><a href="page2/sale.php#pp"><button>Découvrir</button></a></div>
    </div>
</div>




<!---------------------BAS DE PAGE---------------------------->

    <footer id="contact">

        <div class="contenu-footer">
            <div class="bloc footer-services">
                <h3>My & Sa</h3>
                <img src="../../img/mysa.jpg" alt="logo entreprise" class="logo">
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
                    <li><a href="https://www.instagram.com"><img  src="../../img/logo1.jpg"/>Instagram/My&Sa</a></li>
                    <li><a href="https://www.whatsapp.com"><img  src="../../img/logo2.jpg"/>What'sApp/services</a></li>
                </ul>
            </div>
            </div>
        </div>
            
    </footer>

</body></html>