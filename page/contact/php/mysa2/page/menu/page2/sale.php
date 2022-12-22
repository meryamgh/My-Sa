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
	<title>Le Salé | My & Sa</title>
	<link rel="stylesheet" type="text/css" href="bouffe-sale.css">
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
<h1 id="pp" class="pp"><br>Le Salé</h1>
<!--<div class="bgmotif">-->

<div class="products">
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/sale/JB.jpg">
			</div>
			<p>Sandwich Jambon</p>
			<button id="btnPopup" class="btnPopup">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/sale/MT.jpg">
			</div>
			<p>Sandwich Mozza-Tomate</p>
			<button id="btnPopup" class="btnPopup1">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/sale/poulet.jpg">
			</div>
			<p>Sandwich Poulet</p>
			<button id="btnPopup" class="btnPopup2">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/sale/quich1.jpg" >
			</div>
			<p>Quiche Lorraine</p>
			<button id="btnPopup" class="btnPopup3">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/sale/quich2.jpg">
			</div>
			<p>Quiche aux Légumes</p>
			<button id="btnPopup" class="btnPopup4">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container">
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/sale/pizza.jpg">
			</div>
			<p>Pizza</p>
			<button id="btnPopup" class="btnPopup5">Afficher Le Produit</button><br>
		</div>
	</div>
	<div class="container" >
		<div class="produit-info">
			<div class="image">
				<img src="photo_bouffe/sale/croque.jpg">
			</div>
			<p>Croque Monsieur</p>
			<button id="btnPopup" class="btnPopup6">Afficher Le Produit</button><br>
		</div>
	</div></a>
</div>

<!-- $$$$$$$$$$$$$$$$$$$    PARTIE POPUP      $$$$$$$$$$$$$$$$$$$$ -->
<!-- ----------------0---------------------- -->

<div id="overlay" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			<div class="img"><img src="photo_bouffe/sale/JB.jpg"></div>
			<div><h2>
			Sandwich Jambon
			</h2>
			Simple et savoureux le sandwich jambon-emmental est un incontournable.
			</div>
		</div>
		<div class="contenant2">
			<span id="btnClose" class="btnClose">&times;</span>
			<div>
				<span>214 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : Le sandwich mixte se trouve dans une baguette composée de beurre, jambon de qualité supérieure découenné et dégraissé, et d'emmental.</p>
			</div>

		</div>
	</div>
</div>

<!-- ----------------1---------------------- -->

<div id="overlay1" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/sale/MT.jpg"></div>
			<div><h2>
			Sandwich Mozza-Tomate 
			</h2>
			Si vous cherchez un sandwich frais et équilibré aux saveurs du sud (tomates, mozzarella, huile d'olive et pesto), vous avez trouvé votre bonheur !
			</div>
		</div>
		<div class="contenant2"><span id="btnClose1" class="btnClose">&times;</span>
			<div>
				<span>253 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : Ce sandwich est élaboré à partir d'un pain polka flamand aux 2 olives. Il est composé d'un mélange pesto huile, de rondelles de tomate et de mozzarella, et de feuilles de salade.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------2---------------------- -->
<div id="overlay2" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/sale/poulet.jpg"></div>
			<div><h2>
			Sandwich Poulet 
			</h2>
			Le sandwich poule, une innovation qui apporte une vraie touche de modernité à ce sandwich !  Le petit plus bien apprécié : fini les graines de pavot qui agrémentaient votre joli sourire.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose2" class="btnClose">&times;</span>
			<div>
				<span>250 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : Un pain grainé composé de poulet, mayonnaise allégée, moutarde, salade, et tomates.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------3---------------------- -->
<div id="overlay3" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/sale/quich1.jpg"></div>
			<div><h2>
			Quiche Lorraine 
			</h2>
			On ne la présente plus, la quiche Lorraine est une recette traditionnelle ! A l'origine, la cuisson de la quiche Lorraine était un moment de partage convivial. Aujourd'hui, c'est toujours le cas, en entrée ou en plat, chaude ou froide, elle est indémodable.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose3" class="btnClose">&times;</span>
			<div>
				<span>180 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : Nos quiches Lorraine sont cuisinées sur une base de pâte feuilletée pur beurre, garnie avec un mélange de lait, matière grasse (colza et crème laitière), oeufs, lardons et emmental.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------4---------------------- -->
<div id="overlay4" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/sale/quich2.jpg"></div>
			<div><h2>
			Quiche aux Légumes 
			</h2>
			La quiche Légume est une recette pour d'autres saveurs ! En entrée ou en plat, chaude ou froide, elle est indémodable.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose4" class="btnClose">&times;</span>
			<div>
				<span>180 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : Nos quiches sont cuisinées sur une base de pâte feuilletée pur beurre, garnie avec un mélange de lait, matière grasse (colza et crème laitière), oeufs, légumes et emmental.</p>
			</div>

		</div>
	</div>
</div>
<!-- ----------------5---------------------- -->
<div id="overlay5" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/sale/pizza.jpg"></div>
			<div><h2>
			Pizza 
			</h2>
			 La pizza à la française grâce à sa base baguette et une garniture généreuse propre aux saveurs provençales.
			</div>
		</div>
		<div class="contenant2"><span id="btnClose5" class="btnClose">&times;</span>
			<div>
				<span>250 G</span>
				<h3>COMPOSITION </h3>
				<p>Ingrédients : La pizza provençale est faite à base de pâte à pain, garnie de sauce tomate, tomates, olives vertes, huile d'olive, épices, et fromages râpés.</p>
			</div>

		</div>
	</div>
</div>

<!-- ----------------6---------------------- -->
<div id="overlay6" class="overlay">
	<div id="popup" class="popup">
		<div class="contenant">
			
			
			<div class="img"><img src="photo_bouffe/sale/croque.jpg"></div>
			<div><h2>
			Croque Monsieurs 
			</h2>
			Un délicieux pain aux noix, du beurre moutardé, du jambon blanc, du Croque, de l'emmental, de la crème et des pousses d'épinard : un sandwich parfait pour les journées d'hiver !
			</div>
		</div>
		<div class="contenant2"><span id="btnClose6" class="btnClose">&times;</span>
			<div>
				<span>250 G</span>
				<h3>Allergène </h3>
				<p>Blé; Fruits à coque; Gluten; Lait; Moutarde; Noix; Seigle; Sulfite</p>
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
                    <li><a href="https://www.instagram.com"><img  src="../../../img/logo1.jpg"/>   Instagram/My&Sa</a></li>
                    <li><a href="https://www.whatsapp.com"><img  src="../../../img/logo2.jpg"/>    What'sApp/services</a></li>
                </ul>
            </div>
            </div>
        </div>
            
    </footer>

</body></html>