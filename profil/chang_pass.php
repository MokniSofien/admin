<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="cupertino/jquery.ui.all.css" rel="stylesheet">
<link href="fronte.css" rel="stylesheet">
<link href="../page14.css" rel="stylesheet">
<script src="jquery-1.11.1.min.js"></script>
<script src="jquery.ui.core.min.js"></script>
<script src="jquery.ui.widget.min.js"></script>
<script src="jquery.ui.position.min.js"></script>
<script src="jquery.ui.menu.min.js"></script>
<script>
$(document).ready(function()
{
   var jQueryMenu1Opts =
   {
      icons: { submenu: 'ui-icon-carat-1-e' },
      position: { my: 'left top', at: 'right top' }
   };
   $("#jQueryMenu1").menu(jQueryMenu1Opts);
   var jQueryMenu2Opts =
   {
      icons: { submenu: 'ui-icon-carat-1-e' },
      position: { my: 'left top', at: 'right top' }
   };
   $("#jQueryMenu2").menu(jQueryMenu2Opts);
});
</script>
</head>
<body>
<div id="container">

</div>
	 
<div id="title"><span style=" position: relative; color:#4EB1CB;font-family:Arial;font-size:28px;"><strong>Changer votre mot de passe !</strong></span></div>
<?php
if(isset($_POST['submit']))
{ 
    $id=$_POST['id'];

$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
     
         $requete = 'SELECT *  FROM admin WHERE id="'.$id.'"'; 
		 $result=mysqli_query($db,$requete);
while($ligne=mysqli_fetch_array($result))
{

?>	
<div id="edit">
<hr id="trait"></hr>
<form method="POST" action="modifierpass.php"enctype="multipart/form-data">
<div id="ajouter" style="position:relative;text-align:center;margin:auto;top:114px;width:400px;height:391px;z-index:21;" title="ajoute">
<div id="ajouter_Container" style="width:440px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">

<input name="password" id="TextArea1" type="password" style="position:absolute ;top:50px;width:100%;height:26px;z-index:16;" rows="0" cols="50" placeholder="nouveau mot de passe *" />
<input name="id" id="TextArea1" type="hidden" value="<?php echo $ligne['id'];?>" />

<input type="submit" name="submit" id="Button2" value="Ajouter" style="height: 30px;
	
    background: transparent;
    border-color: #4EB1CB;
    border-width: 3px;
    border-style: solid;
    border-radius: 3px;position:relative;top:150px;width:141px;height:25px;z-index:18;margin-top:10px;">
 <input type="reset" id="Button2" name="" value="Quiter"  style="height: 30px;
	
    background: transparent;
    border-color: #4EB1CB;
    border-width: 3px;
    border-style: solid;
    border-radius: 3px; position:relative;   margin-top:10px; margin-left: 150px;right:0px;top:150px;width:141px;height:25px;z-index:18;" onclick="window.location='../liste_Produit/'"/>
</div>
</div>
</form>
</div>

<?php }}?>

<div id="Layer1">
<div id="Layer4">
<div id="Layer4_Container">
<div id="Layer5">
<div id="wb_Image10">
<img src="images/dash.png" id="Image10" alt=""></div>
<div id="wb_Text5"><a href="../dashboard">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Dashboard</strong></span></a></div>
</div>

<div id="Layer6" style="background-color: white;" >
<div id="wb_Text5"><a href="../liste_produit/">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Produit</strong></span></div>

<div id="wb_Image7">
<img src="images/notee.png" id="Image7" alt=""></div>
</div>

<div id="Layer7">
<div id="wb_Image9" >
<img src="images/com.png" id="Image9" alt=""></div>
<div id="wb_Text5"><a href="../liste_blog"><a href="../list_article">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Blog</strong></span></div>

</div>


<div id="Layer8">
<div id="wb_Image8">
<img src="images/cli.png" id="Image8" alt=""></div>
<div id="wb_Text6"><a href="../liste_client">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Membres</strong></span></div>
</div>
<div id="Layer9" <a href="../liste_mail">>
<div id="wb_Image6">
<img src="images/mes.png" id="Image6" alt=""></div>
<div id="wb_Text7">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Mails</strong></span></div>
</div>
</div>
</div>
</div>
<div id="Layer3">
<div id="wb_Text2">
<span style="color:#000000;font-family:Arial;font-size:10px;"><strong>Profil</strong></span></div>
<div id="wb_Image3">
<img src="images/logout.png" id="Image3" alt=""></div>
<div id="wb_Image4">
<img src="images/admin.png" id="Image4" alt=""></div>
<div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:10px;"><strong>Déconnexion</strong></span></div>
</div>
<div id="Layer2">
   <div id="wb_Image1">
      <img src="images/logo_big.png" id="Image1" alt=""></div>
   <div id="wb_Text1">
      <span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Administrateur</span></div>
   <div id="wb_Image2">
      <img src="images/big%20admin.png" id="Image2" alt=""></div>
   <div id="wb_Image5">
      <img onclick="changeme()" src="images/flechh.png" id="Image5" alt=""></div>
   <div id="wb_Text4">
      <span style="color:#FFFFFF;font-family:Arial;font-size:15px;"><strong>Klibi Hend</strong></span></div>
</div>
</body>
<script>
function changeme() {
    var taille = document.getElementById('Layer3');
    if (taille.style.height=="0px") {
	document.getElementById('Layer3').style.height = '68px' ; 
        
    } else {
	document.getElementById('Layer3').style.height = '0px' ;
        
    }
}
</script>
</html>