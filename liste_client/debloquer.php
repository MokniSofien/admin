<!DOCTYPE html>
<html>
<head>
	<title>Bloquer Client</title>
</head>

<body>
	<?php
	include_once("../connexion.php");
$id_c=$_GET['id'];
$id=$_GET['idd'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
	$requete = "update client set actif=1 where id=".$id_c ;
	
	$reponse = mysqli_query($db,$requete); 
    mysqli_close($db);  

	if($reponse==true){ 
			echo '<body onLoad="alert(\'client deblouqe \')">';
		echo '<meta http-equiv="refresh" content="0;URL=index.php?id='.$id.'">';
	}else{
		echo "echec de suppression?id=".$id_c;
		
	}
	
	//Fermer la connexion
	
	?>
</body>
</html>
