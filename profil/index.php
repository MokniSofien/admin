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
 while ($ligne=mysqli_fetch_array($result)){
	 $id=$ligne['id'];
?>
<div id="title"><span style=" position: relative; color:#4EB1CB;font-family:Arial;font-size:29px;"><strong>Profile</strong></span></div>
<div id="edit">
<hr id="trait"></hr>









	<div style= "position:relative; margin: auto; width: 600px; top:110px;" align="center">
<form method="POST" action="chang_pass.php" enctype="multipart/form-data">
		<img style="width:300px;height:260px;margin-bottom:20px;" src="../imageproduit/<?php echo $ligne['image'];?>"></br>
		<label    style="   margin-bottom:20px;color:#9a9999;font-family:Arial;font-size:18px;margin-top:50px;"><?php echo $ligne['prenom'];?> <?php echo $ligne['nom'];?></label>
		
		</br>
		<label    style="   line-height:3em ;color:#9a9999;font-family:Arial;font-size:18px;margin-top:50px;"><?php echo $ligne['email'];?></label>
		
	</br>
<input  name="id" type="hidden" value="<?php echo $ligne['id'];?>">
	<input style="height: 30px;
	
    background: transparent;
    border-color: #4EB1CB;
    border-width: 3px;
    border-style: solid;
    border-radius: 3px;
    margin: 20px;" type="submit" value="Changer votre mot de passe !" name="submit"/>
	

</form>
</div>





</div>




<div id="Layer1">
<div id="Layer4">
<div id="Layer4_Container">
<div id="Layer5"style="background-color: white;">
<div id="wb_Image10">
<img src="images/dash.png" id="Image10" alt=""></div>
<div id="wb_Text5"><a href="../dashboard">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../dashboard/index.php?id=<?php echo $ligne['id']; ?>">Dashboard</a></strong></span></a></div>
</div>

<div id="Layer6"  >
<div id="wb_Text5"><a href="../liste_produit">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../liste_produit/index.php?id=<?php echo $ligne['id']; ?>">Produit</a></strong></span></a></div>

<div id="wb_Image7">
<img src="images/notee.png" id="Image7" alt=""></div>
</div>
<div id="Layer7"  >
<div id="wb_Image9"  >
<img src="images/com.png" id="Image9" alt=""></div>
<div id="wb_Text5"><a href="../liste_article">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../liste_article/index.php?id=<?php echo $ligne['id']; ?>">Blog</a></strong></span></a></div>


</div>



<div id="Layer8"  >
<div id="wb_Image8">
<img src="images/cli.png" id="Image8" alt=""></div>
<div id="wb_Text6"><a href="../liste_client">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../liste_client/index.php?id=<?php echo $ligne['id']; ?>">Membres</a></strong></span></a></div>
</div>
<div id="Layer9">
<div id="wb_Image6">
<img src="images/mes.png" id="Image6" alt=""></div>
<div id="wb_Text7"><a href="../liste_mail">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong><a href="../liste_mail/index.php?id=<?php echo $ligne['id']; ?>">Mails</a></strong><a/></span></div>
</div>
</div>
</div>
</div>
</div>
<div id="Layer3">
<div id="wb_Text2">
<span style="color:#000000;font-family:Arial;font-size:10px;"><strong><a href="../profil/index.php?id=<?php echo $ligne['id']; ?>"style="text-decoration:none; color:black;">Profil</a></strong></span></div>
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