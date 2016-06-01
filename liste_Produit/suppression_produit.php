<!DOCTYPE html>
<html>
<head>
	<title>CHRONOS - suppression D'article</title>
</head>

<body>
	<?php

	$id=$_GET['idd'];
$id_p=$_GET['id'];

$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
	$requete = "DELETE FROM produit WHERE id=".$id_p;
	
	$reponse = mysqli_query($db,$requete); 
    mysqli_close($db);  

	if($reponse==true){ 
			echo '<body onLoad="alert(\'produit supprime\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../liste_Produit/index.php?id='.$id.'">';
		
	}else{
		echo "echec de suppression?id=".$id_p;
	}
	
	//Fermer la connexion
	
	?>
</body>
</html>
