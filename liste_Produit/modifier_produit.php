<?php
extract($_POST);

if(isset($_POST['modifier']))
{ 
    $idd=$_POST['idd'];
  $id=$_POST['id'];
		  $Image=$_FILES['Image']['name'];
    $file_tmp_name=$_FILES['Image']['tmp_name'];
    move_uploaded_file($file_tmp_name,"../imageproduit/$Image");
      $nom=$_POST['nom'];
$version=$_POST['version'];
$Prix=$_POST['Prix'];
      $Descreption=$_POST['Descreption'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     if($Image==null){$sql = 'UPDATE produit SET nom="'.$nom.'",prix="'.$Prix.'",version="'.$version.'",description="'.$Descreption.'" WHERE id="'.$id.'"'; 
		 
	 }
       else { $sql = 'UPDATE produit SET nom="'.$nom.'",prix="'.$Prix.'",version="'.$version.'",image="'.$Image.'",description="'.$Descreption.'" WHERE id="'.$id.'"'; 
	   }
    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 
		echo '<body onLoad="alert(\'produit mofidie avec succés\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=../liste_Produit/index.php?id='.$idd.'">';

    mysqli_close($db);  
    } 

elseif(empty($nom) OR empty($message)) 
    { 
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'; 
    }
  	
     
?>
