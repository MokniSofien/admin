<?php
if(isset($_POST['mailform']))
{


	$adresse_destination=$_POST['adresse_destination'];
$message=$_POST['message'];

$header="MIME-Version: 1.0\r\n";
$header.='From:"WebMaster.com"<support@webmaster.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';


mail($adresse_destination,"Message envoyer par le webmaster",$message,$header);
header('location:index.php');
}
?>
