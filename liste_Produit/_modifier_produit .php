<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modifier Produit</title>

<link href="Untitled11.css" rel="stylesheet">
<link href="page1.css" rel="stylesheet">
</head>
<body>
<div id="PageHeader1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:0px;width:100%;height:94px;z-index:22;">
<div id="PageHeader1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="Layer2" style="position:absolute;text-align:left;left:60px;top:0px;width:781px;height:88px;z-index:5;">
<div id="wb_Image2" style="position:absolute;left:353px;top:43px;width:55px;height:44px;z-index:0;">
<img src="../images/users.png" id="Image2" alt=""></div>
<div id="wb_Image4" style="position:absolute;left:188px;top:39px;width:52px;height:48px;z-index:1;">
<img src="../images/dropbox.png" id="Image4" alt=""></div>
<div id="wb_Image3" style="position:absolute;left:521px;top:39px;width:61px;height:48px;z-index:2;">
<img src="../images/mail.png" id="Image3" alt=""></div>
<div id="wb_Image5" style="position:absolute;left:694px;top:38px;width:63px;height:48px;z-index:3;">
<img src="../images/comment.png" id="Image5" alt=""></div>
<div id="wb_Image1" style="position:absolute;left:8px;top:0px;width:68px;height:87px;z-index:4;">
<img src="../images/admin_logo.png" id="Image1" alt=""></div>
</div>
</div>
</div>
<div id="Layer3" style="position:absolute;text-align:left;left:269px;top:308px;width:6px;height:4px;z-index:20;">
</div>
<?php 


$id=$_GET['id'];
$db = mysqli_connect('localhost','root','')  or die('Erreur de connexion '.mysqli_error());

    mysqli_select_db($db,'com')  or die('Erreur de selection '.mysqli_error($db)); 
    $requete="select * from produit where id=".$id;
    $response=mysqli_query($db,$requete);
while($ligne=mysqli_fetch_array($response)){


?>
<form method="POST" action="modifier_produit.php" enctype="multipart/form-data">
	

<div id="ajouter" style="position:absolute;text-align:center;left:146px;top:114px;width:608px;height:391px;z-index:21;" title="ajoute">
<div id="ajouter_Container" style="width:608px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text1" style="position:absolute;left:237px;top:21px;width:135px;height:21px;z-index:11;text-align:left;">
<span style="color:#05C1E9;font-family:'Times New Roman';font-size:19px;">Modifier Produit</span></div>
<input name="nom" id="TextArea1" type="text" style="position:absolute;left:143px;top:56px;width:313px;height:26px;z-index:12;" rows="0" cols="50" value="<?php echo $ligne['nom'];?>"/>
<input name="version" id="TextArea2" style="position:absolute;left:143px;top:113px;width:313px;height:26px;z-index:13;" rows="0" cols="50" value="<?php echo $ligne['version'];?>"/>
<input name="Prix" id="TextArea3" style="position:absolute;left:143px;top:170px;width:313px;height:26px;z-index:14;" rows="0" cols="50"value="<?php echo $ligne['prix'];?>"/>
<input name="Descreption" id="TextArea4" style="position:absolute;left:143px;top:227px;width:313px;height:26px;z-index:15;" rows="0" cols="50"value="<?php echo $ligne['description'];?>"/>
	<input name="id"  value="<?php echo $ligne['id'];?>" style="display:none"></a>

<input name="Image" type="File" id="TextArea5" style="position:absolute;left:143px;top:283px;width:313px;height:26px;z-index:16;" rows="0" cols="50" value="<?php echo $ligne['image'];?>"/>
<input type="submit" name="modifier" id="Button1" name="" value="Ajouter" style="position:absolute;left:143px;top:342px;width:141px;height:25px;z-index:17;">
 <input type="reset" id="Button2" name="" value="Quiter"  style="position:absolute;left:319px;top:342px;width:141px;height:25px;z-index:18;" onclick="window.location='../choix/'"/>

</div>
</div>
<?php
 }

 ?>
</form>
</body>
</html>