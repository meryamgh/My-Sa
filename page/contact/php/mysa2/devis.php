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
        <title>Réaliser mon Devis | My&Sa </title>
        <link rel='stylesheet' href='home.css'>
    
    </head>


<body>
    <nav>
        <h1>My & Sa</h1>
		<?php
			$nom=$_SESSION['nom'];
			$prenom=$_SESSION['prenom'];
			//$id=$_SESSION['id']; echo $id;
			
		echo "<h2 style='color:black'>$nom $prenom</h2>";
		//echo "<h2 style='color:black'>$id</h2>";
		?>
        <div class="naviguation">
            <a href="index.php">Accueil</a>
            <a href="page/menu/produit.php">Nos produits</a>
			<a href="devis.php">Devis</a>
			<a href="profil.php"> Profil</a>
			<a href="deconnexion.php">Déconnexion</a>
		<div>
		
	</nav>

<br><br><br><br><br>
<div class='text'>
<h1 align="center">Commander </h1>
<h4 align="center">Veillez à cocher les produits que vous souhaitez commander et d'indiquer les quantitées souhaité</h4>
</div>	
<style>
	body{
		background-color:#d5d5e1;
	}
	
	.nomP{
		text-align:left;
	}
	.idP{
		text-align:center;
		color:grey;
	}
	.prixP{
		text-align:center;
		min-width:90px;
	}
	
	th{
		font-size:20px;
		margin:20px 20px;
		
		
	}
	#tab{
		border-collapse:collapse;
		border: 2px solid;
		/* margin:60px 100px; */
		align:center;
		width:75%;
		font-family:serif;
		font-size:17px;
	}
	.top {
		border: 2px solid;
		
	}
	.Q{
		width:50px;
	}
	
	div.text{
		align:center;
		width:100%;
	}
</style>


<div>
	<form method="POST" action="deviss.php" align="center">
		<table id='tab' border='1' align='center' width='75%' align="center">
			<tr class='top'>
				<th class='nomP'>Référence</th>
				<th>Indice P</th>
				<th>Quantité</th>
				<th>Choisir ce produit</th>
			</tr>
			<tr>
				<td class='nomP'>Baguette</td>
				<td class='idP'>1</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='1' /></td>
			</tr>
			<tr>
				<td class='nomP'>Pain Campagne</td>
				<td class='idP'>3</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='3' /></td>
			</tr>
			<tr>
				<td class='nomP'>Pain Céréale</td>
				<td class='idP'>4</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='4' /></td>
			</tr>
			<tr>
				<td class='nomP'>Pain Complet</td>
				<td class='idP'>5</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='5' /></td>
			</tr>
			<tr>
				<td class='nomP'>Torsade aux olives</td>
				<td class='idP'>6</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='6' /></td>
			</tr>
			
			<tr>
				<td class='nomP'>Pain au Chocolat</td>
				<td class='idP'>7</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='7'/></td>
			</tr>
			<tr>
				<td class='nomP'>Croissant</td>
				<td class='idP'>8</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='8'/></td>
			</tr>
			<tr>
				<td class='nomP'>Chausson Aux Pommes</td>
				<td class='idP'>9</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='9' /></td>
			</tr>
			<tr>
				<td class='nomP'>Pain Aux Raisins</td>
				<td class='idP'>11</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='11' /></td>
			</tr>
			<tr>
				<td class='nomP'>BÛCHE FORÊT NOIRE</td>
				<td class='idP'>12</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='12'/></td>
			</tr>
			<tr>
				<td class='nomP'>BÛCHE PRALINÉ SPECULOOS</td>
				<td class='idP'>13</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='13'/></td>
			</tr>
			<tr>
				<td class='nomP'>BÛCHE CITRON CRUMBLE</td>
				<td class='idP'>14</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='14'/></td>
			</tr>
			<tr>
				<td class='nomP'>Eclair Chocolat</td>
				<td class='idP'>15</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='15'/></td>
			</tr>
			<tr>
				<td class='nomP'>Eclair Café</td>
				<td class='idP'>16</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='16'/></td>
			</tr>
			<tr>
				<td class='nomP'>Dessert Opéra</td>
				<td class='idP'>17</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='17'/></td>
			</tr>
			<tr>
				<td class='nomP'>Desert praliné</td>
				<td class='idP'>18</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='18'/></td>
			</tr>
			<tr>
				<td class='nomP'>Dessert Forêt Noire</td>
				<td class='idP'>19</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='19'/></td>
			</tr>
			<tr>
				<td class='nomP'>Dessert Flan</td>
				<td class='idP'>20</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='20'/></td>
			</tr>
			<tr>
				<td class='nomP'>Dessert Paris-Brest</td>
				<td class='idP'>21</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='21'/></td>
			</tr>
			<tr>
				<td class='nomP'>Pain d'Épices</td>
				<td class='idP'>22</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='22'/></td>
			</tr>
			
			<tr>
				<td class='nomP'>Muffin Chocolat</td>
				<td class='idP'>23</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='23'/></td>
			</tr>
			<tr>
				<td class='nomP'>Muffin nature</td>
				<td class='idP'>24</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='24'/></td>
			</tr>
			<tr>
				<td class='nomP'>Muffin Pistache</td>
				<td class='idP'>25</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='25'/></td>
			</tr>
			<tr>
				<td class='nomP'>Cake Au Citron</td>
				<td class='idP'>26</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='26'/></td>
			</tr>
			
			
			<tr>
				<td class='nomP'>Sandwich Jambon</td>
				<td class='idP'>27</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='27' /></td>
			</tr>
			<tr>
				<td class='nomP'>Sandwich Mozza-Tomate</td>
				<td class='idP'>28</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='28' /></td>
			</tr>
			<tr>
				<td class='nomP'>Sandwich Poulet</td>
				<td class='idP'>29</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='29'/></td>
			</tr>
			<tr>
				<td class='nomP'>Quiche Lorraine</td>
				<td class='idP'>30</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='30' /></td>
			</tr>
			<tr>
				<td class='nomP'>Quiche aux Légumes</td>
				<td class='idP'>31</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]'value='31' /></td>
			</tr>
			<tr>
				<td class='nomP'>x2 Parts de Pizza</td>
				<td class='idP'>32</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='32'/></td>
			</tr>
			<tr>
				<td class='nomP'>Croque Monsieur</td>
				<td class='idP'>33</td>
				<td class='Q'><input type='text' name='q[]' value='0'/></td>
				<td class='prixP'><input type='checkbox' name='a[]' value='33' /></td>
			</tr>
			<tr><td align="center" colspan="4"><BR><BR>
			<input type="submit" value="valider"  method="POST" action="deviss.php">
			<BR><BR><BR>
			</td></tr>
		</table>
	</form>
</div>
<br><br><br>
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
                    <li>✔️ Mer - Ven 10h-20h</a></li>
                    <li>✔️ Sam - Dim 10h-17h</li>
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
