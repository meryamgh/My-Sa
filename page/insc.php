<?php
$nom=$_POST["name"];

$prenom=$_POST["prenom"];

$adr=$_POST["adr"];

$mdp1=$_POST["mdp1"];

$mdp2=$_POST["mdp2"];

$num=$_POST["num"];

$host='localhost';
$bdd='site';

$idcon=new mysqli('localhost','root','meryam','site','3308');
 if ( $idcon->connect_errno ) {
 exit ("Impossible de se connecter à la base de données'$bdd' à cause de l'erreur suivant : ".$idcon->connect_error."." ) ;
 };
function iduser($nm,$pr){
	$id=strtolower(substr($nm,0,1)).strtolower($pr).strtolower(substr($nm,strlen($nm)-1,strlen($nm)));
	$sql="SELECT * FROM `utilisateur` WHERE (`idutil` LIKE '$id%')";
	$result=$GLOBALS['idcon']->query($sql);
	$ligne=$result->num_rows;
	if ($ligne!=0){
		$id=$id."_".$ligne;
	}
	echo $id;
	$nom=$GLOBALS["nom"];

	$prenom=$GLOBALS["prenom"];

	$adr=$GLOBALS["adr"];

	$mdp1=$GLOBALS["mdp1"];

	$mdp2=$GLOBALS["mdp2"];
	
	$num=$GLOBALS["num"];
	
	$sqll="INSERT INTO `utilisateur`(`idutil`, `nom`, `prenom`, `adressemail`, `mdp`, `num`) VALUES ('$id', '$nom', '$prenom', '$adr', '$mdp1', '$num' )";
	
	if ($GLOBALS['idcon']->query($sqll)){
		echo "nouveau enregistrement";
		header('Location:../../index.html.HTML');
	}
	else{
		echo "erreur";
	}
}

iduser($nom,$prenom);

	
?>