<?php

if(isset($_POST['mailform']))
{
$id=$_POST['idd'];

	$adresse_destination=$_POST['adresse_destination'];
$message=$_POST['message'];

$header="MIME-Version: 1.0\r\n";
$header.='From:"WebMaster.com"<support@webmaster.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';


mail($adresse_destination,"Message envoyer par le webmaster",$message,$header);
	
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'message envoyé avec succés\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=index.php?id='.$id.'">';

}
?>
