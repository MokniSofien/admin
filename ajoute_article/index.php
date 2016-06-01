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
function noBack(){window.history.forward()}

noBack();

window.onload=noBack;

window.onpageshow=function(evt){if(evt.persisted)noBack()}

window.onunload=function(){void(0)}



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

<?php 
$id=$_GET['id'];
?>
</div>
<div id="edit">
<form method="POST" action="ajouter_article.php"enctype="multipart/form-data">
<div id="ajouter" style="position:absolute;text-align:center;left:146px;top:114px;width:608px;height:391px;z-index:20;" title="ajoute">
<div id="ajouter_Container" style="width:608px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text1" style="position:absolute;left:237px;top:20px;width:135px;height:21px;text-align:center;z-index:6;">
<span style="color:#05C1E9;font-family:'Times New Roman';font-size:19px;">Ajouter Article</span></div>
	<input name="id" type="hidden" value="<?php echo $_GET['id'];?>" >

<input name="Image" type="File" id="in" style="position:absolute;left:143px;top:56px;width:313px;height:26px;z-index:7;" rows="0" cols="50" required="required"/>
<input name="titre" type="text"id="in" style="position:absolute;left:143px;top:113px;width:313px;height:26px;z-index:8;" rows="0" cols="50" placeholder="titre de votre article"required="required"/>
<input name="text" type="text"id="in" style="position:absolute;left:143px;top:170px;width:313px;height:26px;z-index:9;" rows="0" cols="50"placeholder="écrire votre article " required="required"/>
<input name="auteur"type="text" id="in" style="position:absolute;left:143px;top:240px;width:313px;height:26px;z-index:11;" rows="0" cols="50"placeholder="auteur" required="required"/>
  <input type="submit" name="submit" id="Button1" value="valider" style="position:absolute;left:143px;top:342px;width:141px;height:25px;z-index:12;"/>
<input type="reset" id="Button2" name="" value="Quiter" style="position:absolute;left:319px;top:342px;width:141px;height:25px;z-index:13;" onclick="window.location='../choix'">
</div>
</div>
</form>
</div>

<?php





 $host="localhost";
$user="root";
$password="";
 $dbname='com';
$id=$_GET['id'];
$cxn=mysqli_connect($host,$user,$password,$dbname);
 $requete="select * from admin where id=".$id;
$result=mysqli_query($cxn,$requete);
 while ($data=mysqli_fetch_array($result)){
	 $id=$data['id'];
?>
<div id="Layer1">
<div id="Layer4">
<div id="Layer4_Container">
<div id="Layer5" >
<div id="wb_Image10">
<img src="images/dash.png" id="Image10" alt=""></div>
<div id="wb_Text5"><a href="../dashboard">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../dashboard/index.php?id=<?php echo $data['id']; ?>">Dashboard</a></strong></span></a></div>
</div>

<div id="Layer6" >
<div id="wb_Text5"><a href="../liste_produit">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../liste_produit/index.php?id=<?php echo $data['id']; ?>">Produit</a></strong></span></a></div>

<div id="wb_Image7">
<img src="images/notee.png" id="Image7" alt=""></div>
</div>
<div id="Layer7"  style="background-color: white;" >
<div id="wb_Image9" >
<img src="images/com.png" id="Image9" alt=""></div>
<div id="wb_Text5"><a href="../liste_article">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../liste_article/index.php?id=<?php echo $data['id']; ?>">Blog</a></strong></span></a></div>


</div>



<div id="Layer8"  >
<div id="wb_Image8">
<img src="images/cli.png" id="Image8" alt=""></div>
<div id="wb_Text6"><a href="../liste_client">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../liste_client/index.php?id=<?php echo $data['id']; ?>">Membres</a></strong></span></a></div>
</div>
<div id="Layer9">
<div id="wb_Image6">
<img src="images/mes.png" id="Image6" alt=""></div>
<div id="wb_Text7"><a href="../liste_mail">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../liste_mail/index.php?id=<?php echo $data['id']; ?>">Mails</a></strong><a/></span></div>
</div>
</div>
</div>
</div>
</div>
<div id="Layer3">
<div id="wb_Text2">
<span style="color:#000000;font-family:Arial;font-size:10px;"><strong><a href="../profil/index.php?id=<?php echo $data['id']; ?>"style="text-decoration:none; color:black;">Profil</a></strong></span></div>
<div id="wb_Image3">
<img src="images/logout.png" id="Image3" alt=""></div>
<div id="wb_Image4">
<img src="images/admin.png" id="Image4" alt=""></div>
<div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:10px;"><strong><a href ="logout.php" style="text-decoration:none; color:black;">Déconnexion</a></strong></span></div>
</div>
<div id="Layer2">
   <div id="wb_Image1">
      <img src="../images/logo.png" id="Image1" alt=""></div>
   <div id="wb_Text1">
      <span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Administrateur</span></div>
   <div id="wb_Image2">
      <img src="../images/big%20admin.png" id="Image2" alt=""></div>
   <div id="wb_Image5">
      <img onclick="changeme()" src="images/flechh.png" id="Image5" alt=""></div>
   <div id="wb_Text4">
      <span style="color:#FFFFFF;font-family:Arial;font-size:15px;"><strong>Klibi Hend</strong></span></div>
</div>
 <?php }?>
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