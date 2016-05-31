<?php
extract($_POST);

if(isset($_POST['modifier']))
{ 
    $id=$_POST['id'];

		  $Image=$_FILES['Image']['name'];
    $file_tmp_name=$_FILES['Image']['tmp_name'];
    move_uploaded_file($file_tmp_name,"./imageproduit/$Image");
      $titre=$_POST['titre'];
$auteur=$_POST['auteur'];
$text=$_POST['text'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
         $sql = 'UPDATE article SET image="'.$Image.'",titre="'.$titre.'",auteur="'.$auteur.'",text="'.$text.'" WHERE id="'.$id.'"'; 

    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 
header('location:/travail/admin/liste_article/');

    mysqli_close($db);  
    } 

elseif(empty($nom) OR empty($message)) 
    { 
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'; 
    }
  	
     
?>
