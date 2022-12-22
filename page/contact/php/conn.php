<?php
//GHULAM Meryam 12005854 TD-01
//DRICI Katia 12005946 TD-01
//ABDUL Samra	12009267 TD-01
	session_start();					//on démare une session afin de pouvoir envoyée les données 
								//du formulaire d'inscription vers les pages une fois connecter

$iduser=$_POST['iduser'];
											//récupération des données du formulaires de connexion via la méthode POST
$mdp=$_POST['mdp'];

include "BD.php";				//On appelle les variables qui sont stocké dans le fichier BD.php qui vont permettre de nous connecter à la base

$idcon=new mysqli($serveur,$user,$mdpp,$bd,$port);		//connexion à la base 
 if ( $idcon->connect_errno ) {		//on test si la connexion est réussi
 exit ("Impossible de se connecter à la base de données à cause de l'erreur suivant : ".$idcon->connect_error."." ) ;
 };
 
function connec($mdp, $id){		//fonction qui vérifie si mdp et id existe dans la base
	$sql="SELECT `idutil`,`mdp` FROM `utilisateur` WHERE `idutil`='$id' AND `mdp`='$mdp'";	//requete qui vérifie si il exite un enregistrement dans la base avec ce id et ce mdp
	$result=$GLOBALS['idcon']->query($sql);		//stock la requete dans une variable

	$ligne=$result->num_rows;		//nombre de donnée correspondant à la requete stocker dans ligne
	if ($ligne==0){					//Si ligne vaut 0 cela signifie que l'id et le mdp ne figure pas dans la base ou du moins ne sont pas dans le meme enregistrement
		header('Location:../connerr.html');		// redirige vers une page connexion signalant erreur
		return ;			//fin de la fonction
	}
	
	//Sinon on continue car cela signifie que la requete existe bien (mdp et id dans un meme enregistrement)
	//on cree une requete qui recupere toute les donnee de l'utilisateur qui viens de se connecter
	$sql1="SELECT `idutil`, `nom`, `prenom`, `adressemail`, `mdp`, `num`, `date` FROM `utilisateur` WHERE `idutil`='$id' AND `mdp`='$mdp'";
	$resultat1=$GLOBALS['idcon']->query($sql1);		//stock le resultat de la requete 
	$resultat1->data_seek(0);						
	while ($row = $resultat1->fetch_assoc()) {			//boucle while qui parcours le resultat de la requete
	$_SESSION['nom'] =$row['nom'];
	$_SESSION['prenom'] =$row['prenom'];
	$_SESSION['id'] =$row['idutil'];					//ici on stock toute les donnee de la base correspondant à l'utilisateur afin de les transmetres dans les autres pages
	$_SESSION['adr'] =$row['adressemail'];
	$_SESSION['num'] =$row['num'];
	$_SESSION['date'] =$row['date'];
	
}

	header('Location:mysa2/index.php');		//une fois fini on se redirige vers la page principal
}  				//fin de la fonction




if (empty($mdp) || empty($iduser)){			//si le mdp ou le id n'est pas fourni 
	echo "champ incomplet";				//Champ incomplet
}
else{								//sinon
	connec($mdp, $iduser);			//on peut executer la fonction
}


?>
