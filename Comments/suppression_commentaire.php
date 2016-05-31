<!DOCTYPE html>
<html>
<head>
	<title>suppression des commentaires</title>
</head>

<body>
	<?php
	include_once("connexion.php");
$id_comment=$_GET['id'];

$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
	$requete = "DELETE FROM commentaire WHERE id=".$id_comment;
	
	$reponse = mysqli_query($db,$requete); 
    mysqli_close($db);  

	if($reponse==true){ 
		header("location:/travail/backend/comments/");
	}else{
		echo "echec de suppression?id=".$id_p;
	}
	
	//Fermer la connexion
	
	?>
</body>
</html>
