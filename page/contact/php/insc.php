<?php
//GHULAM Meryam 12005854 TD-01
//DRICI Katia 12005946 TD-01
//ABDUL Samra	12009267 TD-01
session_start();    			//on démare une session afin de pouvoir envoyée les données 
								//du formulaire d'inscription vers les pages une fois connecter
								


$nom=$_POST["name"];

$prenom=$_POST["prenom"];

$adr=$_POST["adr"];

$mdp1=$_POST["mdp1"];			//récupération des données du formulaires d'inscription via la méthode POST

$mdp2=$_POST["mdp2"];

$num=$_POST["num"];

$bdd='produit';					//base de donnée à laquel on veut accéder

$date = date('y-m-d h:i:s');	//création d'une variable qu'on va insérer dans la table de la bd qui correspond à la date d'inscription de l'utilisateur

require "BD.php";				//On appelle les variables qui sont stocké dans le fichier BD.php qui vont permettre de nous connecter à la base

$idcon=new mysqli($serveur,$user,$mdpp,$bd,$port);		//connexion à la base 
 if ( $idcon->connect_errno ) {		//on test si la connexion est réussi
 exit ("Impossible de se connecter à la base de données à cause de l'erreur suivant : ".$idcon->connect_error."." ) ;
 };
function iduser($nm,$pr){			//fonction qui crée un id unique à l'utilisateur selon son nom et prénom
	$id=strtolower(substr($nm,0,1)).strtolower($pr).strtolower(substr($nm,strlen($nm)-1,strlen($nm)));  //1ère lettre du nom + prénom + dernière lettre du nom
	$sql="SELECT * FROM `utilisateur` WHERE (`idutil` LIKE '$id%')";		//requete qui verifie si l'id (ou l'id contenue dans un mot) n'existe pas déja dans la base
	$result=$GLOBALS['idcon']->query($sql);		//execution de la requete stocker dans la variable result
	$ligne=$result->num_rows;					//nombre de donnée correspondant à la requete stocker dans ligne
	if ($ligne!=0){								//si ligne est différente de 0 cela signifie que l'id existe deja dans la base
		$id=$id."_".$ligne;					//On change id en rajoutant: _ + un nombre qui correspond au nombre de donnée correspondant à la requete
	}
	echo $id;
	$_SESSION['id']=$id;			//déclare une session ou on stock id
	
	$nom=$GLOBALS["nom"];			//déclare variable globale de nom afin d'utiliser lors de l'insertion sinon ca ne fonctionne pas car on est dans une fonction
	
	$prenom=$GLOBALS["prenom"];		//de meme pour les autres variables provenant de post

	$adr=$GLOBALS["adr"];

	$mdp1=$GLOBALS["mdp1"];

	$mdp2=$GLOBALS["mdp2"];
	
	$num=$GLOBALS["num"];
	
	$date=date('y-m-d h:i:s');		//création d'une variable qu'on va insérer dans la table de la bd qui correspond à la date d'inscription de l'utilisateur
	
	//requete qui permet d'insérer les données saisi dans le formulaire, dans la bd
	
	$sqll="INSERT INTO `utilisateur`(`idutil`, `nom`, `prenom`, `adressemail`, `mdp`, `num`, `date`) VALUES ('$id', '$nom', '$prenom', '$adr', '$mdp1', '$num', '$date')";

	if ($GLOBALS['idcon']->query($sqll)){	//si la requete est bien executé alors
		echo "nouveau enregistrement";
		$_SESSION['date']=$date;					//on crée les variables de session qu'on va transmetre dans les pages 
		
		$_SESSION['adr']=$_POST["adr"];
		$_SESSION['num']=$_POST["num"];
		$_SESSION['nom'] = $_POST["name"];
		$_SESSION['prenom'] = $_POST["prenom"];
		
		header('Location:mysa2/index.php');			//Une fois fini on redirige vers la page principal
	}
	else{									//si il y a un problème on affiche erreur
		echo "erreur";
	}
}

iduser($nom,$prenom);					//appel de la fonction avec les variables du formulaire




	
?>