<!DOCTYPE html>
<html>
<head>
	<title>CHRONOS - suppression D'article</title>
</head>

<body>
	<?php
	include_once("connexion.php");
$id_p=$_GET['id'];

$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
	$requete = "DELETE FROM produit WHERE id=".$id_p;
	
	$reponse = mysqli_query($db,$requete); 
    mysqli_close($db);  

	if($reponse==true){ 
		header("location:/travail/admin/liste_Produit/");
	}else{
		echo "echec de suppression?id=".$id_p;
	}
	
	//Fermer la connexion
	
	?>
</body>
</html>
