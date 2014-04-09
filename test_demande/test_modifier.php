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
			<li> <a href="../ajouter_demande.php">Ajouter demande</a></li>
			<li><a href="../recherch_demande.php">Modifier demande</a></li>
			<li><a href="../Supprimer_demande.php">Supprimer demande </a></li>
			<li><a href="../list_demande.php">liste demande </a></li>
		</ul>
	</div>
</div>
<!-- end #right -->
<div id="center">
	<div class="boxed">
		<h1 class="heading"><i>Gestion des conges</i> </h1>

<?php
 	include("../connect.php"); 
    for ($i=0;$i<sizeof($_POST["id_conge"]); $i++)
    {
      $query="update demand_conge set date_debut='".$_POST["Date_Debut"][$i]."',date_fin='".$_POST["Date_Fin"][$i]."',nb_jour_conge='".$_POST["Nbrj_conge"][$i]."',etat_demand='".$_POST["etat"]."',id_type='".$_POST["type"]."' where id_conge='".$_POST["id_conge"][$i]."'";
      $result=mysql_query($query);
    }
    if ($result)
    {
      echo "<H4>la Demande est modifier ";
      echo "<br><br><br><br>";
      echo "<H4><a href='../recherch_demande.php'>Retour a recherche une demande</a>";
    }
    else
      echo "<H4>Aucun demande a modifier !";
	
	
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
