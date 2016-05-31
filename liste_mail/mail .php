<html>
<head>
</head>
<body>	
	<?php
	$host="localhost";
	$user="root";
	$password="";
	$dbname="com";
	$id=$_GET['id'];
	
	$cnx=mysqli_connect($host,$user,$password,$dbname);
	$requete="select*from liste_mail where id=".$id;
	$result=mysqli_query($cnx,$requete);
	while($ligne=mysqli_fetch_array($result))
	{

	?> 
	<div style= "posision:relative;top:120 px ;  " align="center">
<form method="POST" action="envoyer_des_mails.php" enctype="multipart/form-data">
		<label>Adresse destination</label><input type="text" name="adresse_destination" value="<?php echo $ligne['email'];?>" style="margin:30px" /></br>

	</br>
	<textarea type="text" name="message" placeholder="Taper votre message"style="margin:30px" ></textarea>
		

	</br>

	<input id="Button1" type="submit" value="envoyer le message!" name="mailform"/>

</form>
</div>
<?php } ?>
</body>
</html>