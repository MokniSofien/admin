<!DOCTYPE html>
<html>
<head>
	<title>Bloquer Client</title>
</head>

<body>
	<?php
	include_once("../connexion.php");
$id_c=$_GET['id'];

$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
	$requete = "update client set actif=1 where id=".$id_c ;
	
	$reponse = mysqli_query($db,$requete); 
    mysqli_close($db);  

	if($reponse==true){ 
		header("location:index.php?id=".$_GET['id']."&etat=succes");
		echo "<script>alert('I am an alert box!')</script>"
	}else{
		echo "echec de suppression?id=".$id_c;
		
	}
	
	//Fermer la connexion
	
	?>
</body>
</html>
