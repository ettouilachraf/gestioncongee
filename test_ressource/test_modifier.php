<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
	<h1><a href="#"><marquee>Gestion des Conges</marquee></a></h1>
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
		<h1 class="heading">operations</h1>
		<ul>
			<li> <a href="../ajouter_ressource.php">Ajouter Ressource</a></li>
			<li><a href="../recherch_modifier.php">Modifier Ressource</a></li>
			<li><a href="../Supprimer_ressource.php">Supprimer Ressource </a></li>
			<li><a href="../Initialise_solde.php">Initialiser solde de conge </a></li>
			<li><a href="../list_ressource.php">liste ressource</a></li>
		</ul>
	</div>
</div>
<!-- end #right -->
<div id="center">
	<div class="boxed">
		<h1 class="heading"><i>Gestion des Ressources</i> </h1>
<?php
 	include("../connect.php"); 
    for ($i=0;$i<sizeof($_POST["Id_ressource"]); $i++)
    {
      $query="update ressource set Nom='".$_POST["Nom"][$i]."',Prenom='".$_POST["Prenom"][$i]."',Date_naissance='".$_POST["Date_naissance"][$i]."',Profile='".$_POST["Profile"][$i]."', Login='".$_POST["Login"][$i]."', Passe='".$_POST["Passe"][$i]."', Email='".$_POST["Email"][$i]."',Responsable='".$_POST["Responsable"][$i]."',Date_embauch='".$_POST["Date_embauch"][$i]."' ,Date_sortie='".$_POST["Date_sortie"][$i]."',Solde='".$_POST["Solde"][$i]."' where Id_ressource='".$_POST["Id_ressource"][$i]."'";
      $result=mysql_query($query);
    }
    if ($result)
    {
      echo "<H4>".$i." Ressource et modifier !";
      echo "<br><br><br><br>";
      echo "<H4><a href='../recherch_modifier.php'>Retour à recherche un Ressource</a>";
    }
    else
      echo "<H4>Aucun Ressource à modifier !";
	
	
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans nom</title>
</head>

<body>
</body>
</html>
