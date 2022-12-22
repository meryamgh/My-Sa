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
        <title>Devis | My&Sa </title>
        <link rel='stylesheet' href='devis2.css'>
   
    </head>


<body>

<style >
body{
	margin:50px 20px;
	align:center;
}
.t1{
	width:100%;
	align:center;
	background-color:grey;
}
.t1.th{
	text-align:center;
}
.user{
width:300px;
height:170px;
}
.inform{
width:300px;
padding-left:40px
}

.pdf{
	align:center;
	max-width:900px;
	
}
#devi{
	border-collapse:collapse;
	min-width:700px;
	margin: 10px 20px ;
}
#devi.top th{
	font-size:20px;
}
</style>




<div class='pdf''>
<table class='t1'><tr><th>D E V I S</th>
<?php
			$nom=$_SESSION['nom'];
			$prenom=$_SESSION['prenom'];
			//$id=$_SESSION['id']; echo $id;
			
		echo "<h3 style='color:black'>Chère $nom $prenom, voici le Récapitulatif de votre demande. </h3><hr>";
		//echo "<th style='color:black'>$id</th>";
		?>
    
	<th>
	<nav>
        <h1>My & Sa</h1>
	</nav></th>
</tr></table>		



<br>

<div class="inform">
<fieldset >
<legend style="font-size:25px;" >Client n°00534 :</legend>
<table class="user" >
<tr><td>Nom : </td><td> <?php   $nom=$_SESSION['nom']; echo $nom;  ?>             </td></tr>
<tr><td>Prenom : </td><td> <?php   $prenom=$_SESSION['prenom']; echo $prenom;  ?> </td></tr>
<tr><td>Id : </td><td><b>      <?php   $id=$_SESSION['id']; echo $id;  ?>           </b></td></tr>
<tr><td>Adresse-mail : </td><td> <?php   $adr=$_SESSION['adr']; echo $adr;  ?> </td></tr>
<tr><td>Numéro de téléphone : </td><td>   <?php   $num=$_SESSION['num']; echo $num;  ?>              </td></tr>
<tr><td>Date d'inscription : </td><td> <?php   $date=$_SESSION['date']; echo $date;  ?> </td></tr>
</table>
</fieldset >
</div>
<br>


<?php



$qtn=$_POST['q'];		//ici q représente la quantité que l'on a rentrée dans la case
$arr=array();		//on crée une array ou l'on va stocker pour chaque produit cocher la quantité qui lui correspond
$i=0;			//on va se servir de $i afin d'accéder au valeur de l'array qtn

if (empty($_POST['a'])==false){		//on regarde si des cases ont bien etait selectionne ou non
	$idp=$_POST['a'];	//récupere les id des produits via la méthode POST. Ici a représente la checkbox c'est à dire les produits sélectionneés. C'est donc un tableau car plusieurs cases peuvent etre selectionné

for ($num=0; $num<sizeof($idp) ; $num++){ //on crée une boucle for qui va parcourrir idp et qtn selon le nombre de produit cocher
	
	while ($qtn[$i]==0 && $i<29) {	// comme l'array qtn contient toute les quantités même des cases non séléctionnées on récupere seulement celle dont
		$i+=1;				//la valeur est différente de 0 tant que ce n'est pas le cas on incrément i. si $i dépasse 29 on s'arrete car il y a seulement 30 produit
			
	}
	
	array_push($arr, [$qtn[$i] => $idp[$num]]); // On crée l'array avec pour clé qtn et valeur l'id du produit
	$i+=1;					// on incrémente i pour qtn
}
}


require "../BD.php";				//On appelle les variables qui sont stocké dans le fichier BD.php qui vont permettre de nous connecter à la base

$idcon=new mysqli($serveur,$user,$mdpp,$bd,$port);		//connexion à la base 
 if ( $idcon->connect_errno ) {		//on test si la connexion est réussi
 exit ("Impossible de se connecter à la base de données à cause de l'erreur suivant : ".$idcon->connect_error."." ) ;
 };
 
 ?>
  
<div>
<form>
<table id='devi' border='1' cellspacing="0" border="1" align="center" >

<tr class='top'>
<th>Référence</th>
<th>Produit n°</th>
<th>Prix à l'unité</th>
<th>Quantité</th>
<th>Total</th>


</tr>

 
 
<?php
$total=0; // variable qui compte le prix total des produits selectionné
$count=0; // variable qui va compter le nombre total de produit slectionnées
$coo=0; // le nombre de produit distintc sélectionneés
 
foreach ($arr as $c => $val ){ // on parcours l'array ayant pour clé (0,1...,n) et valeur un autre array

	foreach ($val as $clef => $v){ // on parcours l'array qui se trouve dans l'array principal. il A POUR clé la quantité de produit et pour valeur l'id du produit

	
	$sql="SELECT `idP`, `nomP`, `prixP` FROM `produit` WHERE `idP`='$v' "; // on récupere le nom le prix correspondant au id du produit cocher
	$resultat1=$GLOBALS['idcon']->query($sql); //stock le resultat de la requete
	$resultat1->data_seek(0);
	
		while ($row = $resultat1->fetch_assoc()) {   // parcours les resulat de la requete
		echo "<br><tr>";
		echo "<td>".$row['nomP']."</td><td align='center'>".$v."</td><td>".number_format($row['prixP'],2)."€</td>";
		if (is_numeric($clef)==false){						//si qtn n'est pas un nombre erreur
			echo "<td style='color:red'>Erreur sur la quantité </td>";
			echo "<td style='color:red'>Erreur sur la quantité </td>";
			$coo="Erreur sur la quantité";
		}
		else{											//sinon c'est bon
		echo "<td>".$clef."</td>";
		
		//colonne supplémentaire pour expliquer le resultat : qtn*prix
		echo "<td colspan='4' align='center'>".number_format($row['prixP']*$clef,2)."€</td>";
		$coo=$clef+$coo; //on fait la somme des quantite
		$total+=$row['prixP']*$clef; // on stock dans total la somme des prix a chaque tour de la boucle
		}
		echo "</tr>";

		
		
		$count+=1; //on fait le nombre de tour réalise c'est à dire le nombre de produit distinct selectionné
		}
	}

	
}
	echo "<br><tr><th colspan='4' align='left'> Prix total : </th><th>".number_format($total,2)."€</th></tr>"; //on affiche les résultats

echo "</table><br><table id='devi' align='center'>";
 
	echo "<tr><th colspan='4' align='left'> Nombre de produit distintc selectionné : </th><th>".$count."</th></tr>"; //affiche nbr produit distinct
	echo "<tr><th colspan='4' align='left'> Nombre de produit total selectionné : </th><th>".$coo."</th></tr>";		//afiche nombre total de produit

echo "</table></form></div>";

?>




<hr>
</div>
</html>