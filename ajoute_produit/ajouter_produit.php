<?php

extract($_POST);
if(isset($_POST['submit']))
{ 
include_once'ajouter_produit.php';
		  $Image=$_FILES['Image']['name'];
    $file_tmp_name=$_FILES['Image']['tmp_name'];
    move_uploaded_file($file_tmp_name,"../imageproduit/$Image");
      $nom=$_POST['nom'];
$version=$_POST['version'];
$Prix=$_POST['Prix'];
      $Descreption=$_POST['Descreption'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
    $sql = "INSERT INTO produit VALUES('','$nom','$Prix','$version','$Image','$Descreption')"; 
     
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 

    header('location:../liste_Produit/');

    mysqli_close($db);  
    } 

elseif(empty($nom) OR empty($message)) 
    { 
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'; 
    }
  	
     
?>
