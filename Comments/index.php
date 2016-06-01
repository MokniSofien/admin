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
$id=$_GET['id'];

$req = 'SELECT * FROM commentaire';
	$res=mysqli_query($conn,$req);
	while($data1 = mysqli_fetch_array($res)){




	
	?>  
<tr>

<td class="cell2"> <span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo '<p>'.$data1['comment'].'</p>';?></span></td>
<td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"><?php echo  $data1['nom_article'];?></span></td>
<td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;">
<?php echo  '<p aligne\"right\">'.date("j/n/Y G:i",strtotime($data1['date'])).'</p>' ;?>  </span> </td>
<td class="cell2"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> <?php echo  $data1['nom'];?></span></td>
<td class="cell3"><span style="color:#000000;font-family:Arial;font-size:13px;line-height:16px;"> </span><div><a href="suppression_commentaire.php?id=<?php echo $data1['id'];?>&idd=<?php echo $_GET['id'];?>">
<img src="../images/poubel.png" id= alt=""></a></div></td>

</tr>
    <?php 
}
?>
</table>
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