<!DOCTYPE html>
<html>
<head>
	<title>suppression des commentaires</title>
</head>

<body>
	<?php
	
$id_comment=$_GET['id'];
$id=$_GET['idd'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
	$requete = "DELETE FROM commentaire WHERE id=".$id_comment;
	
	$reponse = mysqli_query($db,$requete); 
    mysqli_close($db);  

	if($reponse==true){ 
		echo '<body onLoad="alert(\'suppression avec succés\')">';

		echo '<meta http-equiv="refresh" content="0;URL=index.php?id='.$id.'">';
	}else{
		echo "echec de suppression?id=".$id_p;
	}
	
	//Fermer la connexion
	
	?>
</body>
</html>
