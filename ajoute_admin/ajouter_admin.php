<?php

extract($_POST);
if(isset($_POST['submit']))
{ 
$id=$_POST['id'];
		  $Image=$_FILES['Image']['name'];
    $file_tmp_name=$_FILES['Image']['tmp_name'];
    move_uploaded_file($file_tmp_name,"../imageproduit/$Image");
      $nom=$_POST['nom'];
   $prenom=$_POST['Prenom'];
$email=$_POST['Email'];
      $password=$_POST['password'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
    $sql = "INSERT INTO admin VALUES('','$nom','$prenom','$email','$password','$Image')"; 
     
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 
		echo '<body onLoad="alert(\'admin ajouté avec succés\')">';

		echo '<meta http-equiv="refresh" content="0;URL=index.php?id='.$id.'">';
    mysqli_close($db);  
    } 

elseif(empty($nom) OR empty($message)) 
    { 
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'; 
    }
  	
     
?>
