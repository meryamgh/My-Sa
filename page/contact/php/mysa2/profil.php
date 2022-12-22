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
<br>
<br>
<br>
<br>
<br>
<br>


<style >
	body{
		background-color:white;
		/*background-image: URL('https://www.raynaldethien.fr/Nuages/Cirrus-4.JPG'); */
	}
	.user{
		width:400px;
		height:270px;
		
	}
	.inform{
		width:400px;
		padding-left:450px
	}
</style>
<div class="inform">
	<fieldset >
		<legend align='center' >Mes Informations Personnelle</legend>
			<table class="user" align="center">
				<tr><td><b>Nom : </b></td><td> <?php   $nom=$_SESSION['nom']; echo $nom;  ?>             </td></tr>
				<tr><td><b>Prenom : </b></td><td>	<?php   $prenom=$_SESSION['prenom']; echo $prenom;  ?> 			</td></tr>
				<tr><td><b>Id : </b></td><td>    <?php   $id=$_SESSION['id']; echo $id;  ?>           </td></tr>
				<tr><td><b>Adresse-mail : </b></td><td>		<?php   $adr=$_SESSION['adr']; echo $adr;  ?> 		</td></tr>
				<tr><td><b>Numéro de téléphone : </b></td><td>   <?php   $num=$_SESSION['num']; echo $num;  ?>              </td></tr>
				<tr><td><b>Date d'inscription : </b></td><td>		<?php   $date=$_SESSION['date']; echo $date;  ?> 		</td></tr>
			</table>


		
	</fieldset>
</div>
<br><br>
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
