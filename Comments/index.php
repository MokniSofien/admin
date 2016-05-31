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
<div id="edit">
<table style="position:relative;margin:auto;top:56px;width:auto ;height:auto ;z-index:11;" id="Table1">

<tr>

<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> commentaire</span></td>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Article</span></td>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Date</span></td>
<td class="cell0"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Client</span></td>

<td class="cell1"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> Supprimer<br>Commentaire</span></td>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "com";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$req = 'SELECT * FROM commentaire';
	$res=mysqli_query($conn,$req);
	while($data1 = mysqli_fetch_array($res)){




	
	?>  
<tr>

<td class="cell2"> <span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo '<p>'.$data1['comment'].'</p>';?></span></td>
<td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo  $data1['nom_article'];?></span></td>
<td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">
<?php echo  '<p aligne\"right\">'.date("j/n/Y G:i",strtotime($data1['date'])).'</p>' ;?>  </span> </td>
<td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo  $data1['client'];?></span></td>
<td class="cell3"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><div><a href="suppression_commentaire.php?id=<?php echo $data1['id'];?>">
<img src="../images/poubel.png" id= alt=""></a></div></td>

</tr>
    <?php 
}
?>
</table>
</div>

<div id="Layer1">
<div id="Layer4">
<div id="Layer4_Container">
<div id="Layer5">
<div id="wb_Image10">
<img src="images/dash.png" id="Image10" alt=""></div>
<div id="wb_Text5">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Dashboard</strong></span></div>
</div>
<div id="Layer6">
<div id="wb_jQueryMenu1">
<ul id="jQueryMenu1">
<li><a href="" target="_self" title="Produit">Produit</a>
<ul>
<li><a href="http:// sofien" target="_self">Liste&nbsp;Produit</a></li>
<li><a href="http:// sofien 2" target="_self">Ajoute&nbsp;Produit</a></li>
</ul>
</li>
</ul>
</div>
<div id="wb_Image7">
<img src="images/notee.png" id="Image7" alt=""></div>
</div>
<div id="Layer7">
<div id="wb_Image9">
<img src="images/com.png" id="Image9" alt=""></div>
<div id="wb_jQueryMenu2">
<ul id="jQueryMenu2">
<li><a href="" target="_self" title="Blog">Blog</a>
<ul>
<li><a href="http:// sofien" target="_self">Liste&nbsp;des&nbsp;articles</a></li>
<li><a href="http:// sofien 2" target="_self">Ajouter&nbsp;article</a></li>
<li><a href="" target="_self">Liste&nbsp;des&nbsp;commentaires</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div id="Layer8">
<div id="wb_Image8">
<img src="images/cli.png" id="Image8" alt=""></div>
<div id="wb_Text6">
<span style="color:#4EB1CB;font-family:Arial;font-size:13px;"><strong>Membres</strong></span></div>
</div>
<div id="Layer9">
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
<span style="color:#000000;font-family:Arial;font-size:15px;"><strong>Profil</strong></span></div>
<div id="wb_Image3">
<img src="images/logout.png" id="Image3" alt=""></div>
<div id="wb_Image4">
<img src="images/admin.png" id="Image4" alt=""></div>
<div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:15px;"><strong>Déconnexion</strong></span></div>
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