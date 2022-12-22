<?php
//GHULAM Meryam 12005854 TD-01
//DRICI Katia 12005946 TD-01
//ABDUL Samra	12009267 TD-01
	session_start();
	
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nos Viennoiseries | My & Sa</title>
	<link rel="stylesheet" type="text/css" href="bouffe.css">
	<link rel="stylesheet" type="text/css" href="../../nav.css">

    
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
            <a href="../../../index.php">Accueil</a>
            <a href="../produit.php#product">Nos produits</a>
			<a href="../../../devis.php">Devis</a>
			<a href="../../../profil.php">Profil</a>
			<a href="../../../deconnexion.php">Déconnexion</a>
        </div>
    </nav>



    <div class="baniere">
        <!--<img src="fond2.jpg" alt="image">-->
        <div class="texte_centrer"><u><b><h3>NOS PRODUITS</h3></u></b>
        </div>
    </div>
<!--BANIERE-->
<section>
        <div class="link">
                <a href="pain.php#pp"><div class="item">
                <img src="../photo_produit_1/pain.jpg"><br>Pain</div></a>

                <a href="viennoiserie.php#pp"><div class="item">
                <img src="../photo_produit_1/vienoiserie.jpg"><br>Viennoiseries</div></a>

                <a href="Patisserie.php#pp"><div class="item">
                <img src="../photo_produit_1/patisserie.jpg"><br>Pâtisserie</div></a>
                
                <a href="sale.php#pp"><div class="item">
                <img src="../photo_produit_1/pizza.jpg"><br>Le Salé</div></a>
        </div>
</section>
<!--Nouveauté produits-->
<h1 class="pp" id="pp"><br>Viennoiserie</h1>
<!--<div class="bgmotif">-->

<div class="products">
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/veinnoiserie/pain-au-chocolat.jpg">
			</div>
			<p>Pain Au Chocolat</p>
			<button id="btnPopup" class="btnPopup">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/veinnoiserie/croissant.jpg">
			</div>
			<p>Croissant</p>
			<button id="btnPopup" class="btnPopup1">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/veinnoiserie/chausson-aux-pommes.jpg">
			</div>
			<p>Chausson Aux Pommes</p>
			<button id="btnPopup" class="btnPopup2">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/veinnoiserie/10-mini-viennoiseries.jpg" >
			</div>
			<p>10 mini Viennoiseries</p>
			<button id="btnPopup" class="btnPopup3">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/veinnoiserie/pain-aux-raisins.jpg">
			</div>
			<p>Pain Aux Raisins</p>
			<button id="btnPopup" class="btnPopup4">Afficher Le Produit</button><br>
		</div>
	</div></a>
</div>


<!-- $$$$$$$$$$$$$$$$$$$.    PARTIE POPUP      $$$$$$$$$$$$$$$$$$$$ -->
<!-- ----------------0---------------------- -->

<div id="overlay" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			<div class="img"><img src="photo_bouffe/veinnoiserie/pain-au-chocolat.jpg"></div>
			<div><h2>
			Pain Au Chocolat 
			</h2>
			Au petit-déjeuner ou au goûter, retrouvez toutes les saveurs de notre pain au chocolat.
			</div>
		</div>
		<div class="contenant2">
			<span id="btnClose" class="btnClose">&times;</span>
			<div>
				<span>100 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients :  farine de BLÉ (GLUTEN), BEURRE, eau, chocolat noir 8,9% (sucre, pâte de cacao, beurre de cacao, émulsifiant : lécithine de SOJA, vanilline), levain (eau, farine de BLÉ), sucre, levure, améliorant (farine de BLÉ, GLUTEN de FROMENT, émulsifiant : lécithine de colza), miel, sel, ŒUFS.</p>
			</div>

		</div>
	</div>
</div>

<!-- ----------------1---------------------- -->

<div id="overlay1" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/veinnoiserie/croissant.jpg"></div>
			<div><h2>
			Croissant 
			</h2>
			Emblème du petit-déjeuner à la française, le délicat feuilletage de notre croissant vous...
			</div>
		</div>
		<div class="contenant2"><span id="btnClose1" class="btnClose">&times;</span>
			<div>
				<span>100 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients: farine de BLÉ (farine de BLÉ, GLUTEN de BLÉ), BEURRE 26%, eau, levain (eau, farine de BLÉ), sucre, levure, améliorant (farine de BLÉ, GLUTEN de FROMENT, émulsifiant: lécithine de colza), miel, sel, ŒUFS.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------2---------------------- -->
<div id="overlay2" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/veinnoiserie/chausson-aux-pommes.jpg"></div>
			<div><h2>
			Chausson Aux Pommes
			</h2>
			Une compote de pommes gourmande dans une enveloppe au délicat feuilletage au levain.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose2" class="btnClose">&times;</span>
			<div>
				<span>250 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : Pâte feuilletée 57,7% (farine de BLÉ (farine de BLÉ malté, farine de fève), BEURRE, eau, régulateur de farine (farine de BLÉ, protéines de BLÉ), sel, sucre), compote de pommes 42,3% (pommes 83%, sucre). Dorure: ŒUFS.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------3---------------------- -->
<div id="overlay3" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/veinnoiserie/10-mini-viennoiseries.jpg"></div>
			<div><h2>
			10 mini Viennoiseries 
			</h2>
			Nos incontournables petites douceurs à dévorer en une bouchée.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose3" class="btnClose">&times;</span>
			<div>
				<span>250 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : Composition variable selon l'assortiment: Mini croissant: farine de BLÉ (farine de BLÉ, GLUTEN de BLÉ), BEURRE 26%, eau, levain (eau, farine de BLÉ), sucre, levure, améliorant (farine de BLÉ, GLUTEN de FROMENT, émulsifiant : lécithine de colza, acide ascorbique), miel, sel, ŒUFS. Mini pain au chocolat: farine de BLÉ (GLUTEN), BEURRE, eau, chocolat noir 8,9% (sucre, pâte de cacao, beurre de cacao, émulsifiant: lécithine de SOJA, vanilline), levain (eau, farine de BLÉ), sucre, levure, améliorant (farine de BLÉ, GLUTEN de FROMENT, émulsifiant: lécithine de colza, acide ascorbique), miel, sel, ŒUFS. </p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------4---------------------- -->
<div id="overlay4" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/veinnoiserie/pain-aux-raisins.jpg"></div>
			<div><h2>
			Pain Aux Raisins
			</h2>
			Notre pain aux raisins est garni d'une délicate et onctueuse crème pâtissière.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose4" class="btnClose">&times;</span>
			<div>
				<span>100 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : Farine de BLÉ (farine de BLÉ, GLUTEN de BLÉ), BEURRE, LAIT demi-écrémé, eau, raisins secs réhydratés 10,1% (raisins secs, eau, sucre), sucre, levain (eau, farine de BLÉ), jaune d'ŒUFS, levure, améliorant (farine de BLÉ, GLUTEN de FROMENT, émulsifiant: lécithine de colza), préparation pour crème pâtissière 1,3%, miel, sel, ŒUFS.</p>
			</div>

		</div>
	</div>
</div>

<!-- --------------LIEN JS----------------- -->
<script type="text/javascript" src="Produits.js"></script>



<!---------------------BAS DE PAGE---------------------------->

    <footer id="contact">

        <div class="contenu-footer">
            <div class="bloc footer-services">
                <h3>My & Sa</h3>
                <img src="../../../img/mysa.jpg" alt="logo entreprise" class="logo">
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
                    <li><a href="https://www.instagram.com"><img alt="" src="../../../img/logo1.jpg"/>   Instagram/My&Sa</a></li>
                    <li><a href="https://www.whatsapp.com"><img alt="" src="../../../img/logo2.jpg"/>    What'sApp/services</a></li>
                </ul>
            </div>
            </div>
        </div>
            
    </footer>


</body></html>