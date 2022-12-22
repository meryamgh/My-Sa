<?php
//GHULAM Meryam 12005854 TD-01
//DRICI Katia 12005946 TD-01
//ABDUL Samra	12009267 TD-01

session_start();  //on démare une session afin de pouvoir envoyer les données
$id=$_SESSION['id']; //on stocke l'id de la personne connectée grace à la session


$date=date('y-m-d h:i:s'); //création d'une variable qu'on va insérer dans la table comm de la bd qui correspond à la date de puvlication du commentaire

require "../BD.php";				//On appelle les variables qui sont stocké dans le fichier BD.php qui vont permettre de nous connecter à la base

$idcon=new mysqli($serveur,$user,$mdpp,$bd,$port);		//connexion à la base 
 if ( $idcon->connect_errno ) {		//on test si la connexion est réussi
 exit ("Impossible de se connecter à la base de données'$bdd' à cause de l'erreur suivant : ".$idcon->connect_error."." ) ;
 };
 
$pseudo=$_POST["pseudo"];       //récupération des données via la méthode POST
$comm=$_POST["commentaire"];

$sql="INSERT INTO `comm`(`idcomm`, `comm`, `idutil`, `date`) VALUES (\N, '$comm', '$id', '$date')"; //insertion du commentaire, ainsi que la date à laquelle il le publie dans la base  
$idcon-> query($sql);

header('Location:index.php#commentaire'); //rediretion vers la page principale une fois le commentaire publié
$idcon-> close(); //fermeture de la connexion



?>
