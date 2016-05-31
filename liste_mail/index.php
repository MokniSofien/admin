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
<div id="title"><span style=" position: relative; color:#4EB1CB;font-family:Arial;font-size:29px;"><strong>Mails</strong></span></div>
<div id="edit">
<hr id="trait"></hr>








<table style="position:absolute;left:156px;top:120px;width:90%;height:125px;z-index:13;" id="Table1">
<tr>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Mail</span></td>
<td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Date</span></td>
<td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">Message</span></td>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">De la part de</span></td>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">téléphone</span></td>

<td class="cell4"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">Repondre</span></td>
</tr>
<?php 

$host="localhost";
$user="root";
$password="";
$dbname="com";
$cnx=mysqli_connect($host,$user,$password,$dbname);
$requete="SELECT * FROM liste_mail";
$result=mysqli_query($cnx,$requete);
while($ligne=mysqli_fetch_array($result))
{

?>
<tr>
<td class="cell5"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo $ligne['email']?></span></td>
<td class="cell6"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo $ligne['date']?></span></td>
<td class="cell7"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $ligne['message']?> </span></td>
<td class="cell8"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $ligne['nom']?> </span></td>
<td class="cell8"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo $ligne['telephone']?> </span></td>

<td class="cell9"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"></span>
<a href="mail.php?id=<?php echo $ligne['id'];?>"><img src="../images/repondre.png" id="Imagee" alt=""></a></td>
</tr>
<?php } ?> 
</table>




</div>




<div id="Layer1">
<div id="Layer4">
<div id="Layer4_Container">
<div id="Layer5">
<div id="wb_Image10">
<img src="images/dash.png" id="Image10" alt=""></div>
<div id="wb_Text5"><a href="../dashboard">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Dashboard</strong></span></a></div>
</div>

<div id="Layer6"  >
<div id="wb_Text5"><a href="../liste_produit">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Produit</strong></span></a></div>

<div id="wb_Image7">
<img src="images/notee.png" id="Image7" alt=""></div>
</div>
<div id="Layer7" style="background-color: white;" >
<div id="wb_Image9"  >
<img src="images/com.png" id="Image9" alt=""></div>
<div id="wb_Text5"><a href="../liste_article">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Blog</strong></span></a></div>


</div>



<div id="Layer8"  >
<div id="wb_Image8">
<img src="images/cli.png" id="Image8" alt=""></div>
<div id="wb_Text6"><a href="../liste_client">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Membres</strong></span></a></div>
</div>
<div id="Layer9">
<div id="wb_Image6">
<img src="images/mes.png" id="Image6" alt=""></div>
<div id="wb_Text7"><a href="../liste_mail">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Mails</strong><a/></span></div>
</div>
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