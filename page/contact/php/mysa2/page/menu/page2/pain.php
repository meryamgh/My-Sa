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
	<title>Nos Pain | My&Sa</title>
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
<h1 id="pp" class="pp"><br>Pain</h1>
<!--<div class="bgmotif">-->
<div class="products">
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/baguette.jpg">
			</div>
			<p>Baguette</p>
			<button id="btnPopup" class="btnPopup">Afficher Le Produit</button><br>
		</div>
	</div></a>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/Tradition.jpg">
			</div>
			<p>Tradition</p>
			<button id="btnPopup" class="btnPopup1">Afficher Le Produit</button><br>
		</div>
	</div></a>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/campagne.jpg">
			</div>
			<p>Pain Campagne</p>
			<button id="btnPopup" class="btnPopup2">Afficher Le Produit</button><br>
		</div>
	</div>
	
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/pain_cereal.jpg" >
			</div>
			<p>Pain Céréale</p>
			<button id="btnPopup" class="btnPopup3">Afficher Le Produit</button><br>
		</div>
	</div>

	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/complet.jpg">
			</div>
			<p>Pain Complet</p>
			<button id="btnPopup" class="btnPopup4">Afficher Le Produit</button><br>
		</div>
	</div>

	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="https://www.maison-kayser.com/13-home_default/torsade-aux-olives.jpg" alt="Torsade aux olives"/>
			</div>
			<p>Torssade aux olives</p>
			<button id="btnPopup" class="btnPopup5">Afficher Le Produit</button><br>
		</div>
		</div>
	</div></a>
</div>









	<!-- $$$$$$$$$$$$$$$$$$$.    PARTIE POPUP      $$$$$$$$$$$$$$$$$$$$ -->
<!-- ----------------0---------------------- -->

<div id="overlay" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			<div class="img"><img src="photo_bouffe/baguette.jpg"></div>
			<div><h2>
			Baguette 
			</h2>
			Inscrite dans la tradition boulangère, la baguette My&Sa est le fruit d'un savoureux mélange d'ingrédients simples, de qualité, d'un peu de patience et surtout beaucoup de passion.
			</div>
		</div>
		<div class="contenant2">
			<span id="btnClose" class="btnClose">&times;</span>
			<div>
				<span>250 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : farine origine France, d'eau, de sel, et de levure.</p>
			</div>

		</div>
	</div>
</div>

<!-- ----------------1---------------------- -->

<div id="overlay1" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/Tradition.jpg"></div>
			<div><h2>
			Tradition 
			</h2>
			Cette baguette est non façonnée, sa mie est grasse et dotée de belles alvéoles.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose1" class="btnClose">&times;</span>
			<div>
				<span>250 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients: farine de tradition (GLUTEN), eau, levain (eau, farine de BLÉ), sel, farine de maïs, levure.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------2---------------------- -->
<div id="overlay2" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/campagne.jpg"></div>
			<div><h2>
			Pain Campagne
			</h2>
			Notre Pain de Campagne exalte toutes les saveurs du pain de tradition.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose2" class="btnClose">&times;</span>
			<div>
				<span>1800 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients: eau, farine de meule (GLUTEN) 30,6%, levain (eau, farine de BLÉ), farine de tradition (GLUTEN), sel de Guérande, levure.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------3---------------------- -->
<div id="overlay3" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/pain_cereal.jpg"></div>
			<div><h2>
			Pain Céréale
			</h2>
			L'abondance des parfums du mélange de graines de sésame, pavot, millet, lin blond, lin brun et tournesol est sublimée dans ce pain à la farine de froment et levain liquide. Il s'accordera avec tous vos mets, tout au long de la journée. Parfait des tartines du petit-déjeuner au dîner.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose3" class="btnClose">&times;</span>
			<div>
				<span>270 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients: farine de tradition (GLUTEN), eau, levain (eau, farine de BLÉ), mélange de céréales 7,4% (graines de lin brun, lin jaune, millet, SÉSAME, pavot bleu), sel, farine de maïs, levure.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------4---------------------- -->
<div id="overlay4" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/complet.jpg"></div>
			<div><h2>
			Pain Complet 
			</h2>
			Retrouvez toutes les saveurs d'une mie brune et dense.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose4" class="btnClose">&times;</span>
			<div>
				<span>350 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients: farine de BLÉ complète (42,6%), eau, farine de tradition (GLUTEN), levain (eau, farine de BLÉ), sel, levure.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------5---------------------- -->
<div id="overlay5" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="https://www.maison-kayser.com/13-home_default/torsade-aux-olives.jpg" alt="Torsade aux olives"/></div>
			<div><h2>
			Torssade aux olives 
			</h2>
			Une torsade aux saveurs méridionales garnie d'olives vertes et noires.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose5" class="btnClose">&times;</span>
			<div>
				<span>250 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : farine de tradition (GLUTEN), eau, olives 12,9%, levain (eau, farine de BLÉ), huile d'olive extra vierge, sel, farine de maïs, levure.</p>
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
					<li><a href="https://www.instagram.com"><img alt="" src="../../../img/logo1.jpg"/>Instagram/My&Sa</a></li>
                    <li><a href="https://www.whatsapp.com"><img alt="" src="../../../img/logo2.jpg"/>What'sApp/services</a></li>
                
                </ul>
            </div>
            </div>
        </div>
            
    </footer>
</body></html>