
<?php

extract($_POST);
if(isset($_POST['submit']))
{ 		
      $auteur=$_POST['auteur'];
      $titre=$_POST['titre'];
      $texte=$_POST['text'];
	  $Image=$_FILES['Image']['name'];
	  $file_tmp_name=$_FILES['Image']['tmp_name'];
	  move_uploaded_file($file_tmp_name,"../imageproduit/$Image");
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
    $sql = "INSERT INTO article VALUES('','$Image','$titre',NOW(),'$auteur','$text')"; 
     
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 
	echo '<body onLoad="alert(\'article ajoute avec succés\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../liste_article/index.php?id='.$id.'">';

    mysqli_close($db);  
    } 

elseif(empty($nom) OR empty($message)) 
    { 
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'; 
    }
  	
     
?>
