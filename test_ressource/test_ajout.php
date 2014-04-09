<?php
function date_fr_us($dt)
{
 $j = substr($dt,0,2);
 $m = substr($dt,3,2);
 $a = substr($dt,6,4);
 return $a."/".$m."/".$j;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gestion des conges</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Style1 {color: #000066}
-->
</style>
</head>
<body>
<div id="header">
	<h1><a href="#"><i><marquee>Gestion des conges</marquee></i></a></h1>
</div>
<div id="left">
	<div id="menu" class="boxed">
		<h2 class="heading">Pages</h2>
		<ul>
			<li class="first"><a href="../accueil_drh.php" title="">Accueil</a></li>
			<li><a href="../demande.php" title="">Demande</a></li>
			<li><a href="../ressource.php" title="">Ressource</a></li>
			<li><a href="../joursferie.php" title="">jours ferie</a></li>
		</ul>
	</div>
</div>
<!-- end #left -->
<div id="right">
	<div class="boxed">
	</div>
</div>
<!-- end #right -->
<div id="center">
	<div class="boxed">
		<h1 class="heading">Gestion des Ressources </h1>
<?php
    
	include("../connect.php");
	
	if (!empty($_POST["Ajouter"]))
	
	{
		if (($_POST["Nom"]=="") && ($_POST["Prenom"]=="") && ($_POST["Login"]=="") && ($_POST["Passe"]==""))
   		{
		
     		echo " <H4>il faut entre le nom et le prenom et le login et mot de passe ,<br>Veuillez remplir les champs convenablement ! </h4><br><br><br><br> 
			<H4><a href='Javascript:history.go(-1)'>Retour à la page ajouter un nouveau Ressource</a>";
    	}
	 	else
    	{ 
			if (isset($_POST['Login']))
			{	
				$Login=$_POST['Login'];
				$result=mysql_query("select * from ressource where Login= '$Login'");
				$test = mysql_num_rows($result);
				if(($test==0))
				{	
				$rdtn=date_fr_us($_POST['Date_naissance']);
				$rdte=date_fr_us($_POST['Date_embauch']);
				$rdts=date_fr_us($_POST['Date_sortie']);
   					$requet="insert into ressource(Nom,Prenom,Date_naissance,Profile,Login,Passe,Email,Responsable,Date_embauch,Date_sortie,Solde) values ('".$_POST["Nom"]."', '".$_POST["Prenom"]."','$rdtn','".$_POST["Profile"]."', '".$_POST["Login"]."', '".$_POST["Passe"]."','".$_POST["Email"]."','".$_POST["Responsable"]."','$rdte','$rdts','" .$_POST["Solde"] ."')";
        			$result=mysql_query($requet);
					if($result)
					{
						echo " bien ajouter ";
						echo "<H4><a href='../ajouter_ressource.php'>Ajouter un nouveau Ressource</a><br>";
					}
					else
					{
        				echo "<H4>Erreur lors de l'ajout du Ressource !<br><br><br><br>";
      					echo "<H4><a href='../ajouter_ressource.php'>Ajouter un nouveau Ressource</a><br>";
					}
				}
				else  
				echo " il faut changer de login ";
							}	
		}
	}
		
?>		
	</div>
</div>
<!-- end #center -->
<div style="clear: both;">&nbsp;</div>
<div id="footer">
	<p id="legal"></p>
	<p id="links"></p>
</div>
</body>
</html>
