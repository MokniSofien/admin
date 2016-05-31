<?php
extract($_POST);

if(isset($_POST['submit']))
{ 
    $id=$_POST['id'];
   $password=$_POST['password'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
         $sql = 'UPDATE admin SET password="'.$password.'" WHERE id="'.$id.'"'; 

    mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 
	
	
		echo '<body onLoad="alert(\'mot de passe bien changee \')">';
		echo '<meta http-equiv="refresh" content="0;URL=../dash/index.php">';
	
	
	
 
    } 

elseif(empty($nom) OR empty($message)) 
    { 
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'; 
    }
  	
     
?>