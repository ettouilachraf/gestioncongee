<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Gestion des conges</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
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
			<li class="first"><a href="accueil_drh.php" title="">Accueil</a></li>
			<li><a href="demande.php" title="">Demande</a></li>
			<li><a href="ressource.php" title="">Ressource</a></li>
			<li><a href="joursferie.php" title="">jours ferie</a></li>
		</ul>
	</div>
</div>
<!-- end #left -->
<div id="right">
	<div class="boxed">
		<h1 class="heading">operations</h1>
		<ul>
			<li> <a href="ajouter_ressource.php">Ajouter Ressource</a></li>
			<li><a href="recherch_modifier.php">Modifier Ressource</a></li>
			<li><a href="Supprimer_ressource.php">Supprimer Ressource </a></li>
			<li><a href="Initialise_solde.php">Initialiser solde de conge </a></li>
			<li><a href="list_ressource.php">liste ressource</a></li>
		</ul>
	</div>
</div>
<!-- end #right -->
<div id="center">
	<div class="boxed">
		<h1 class="heading"><i>Gestion des Rssources</i> </h1>
<?php
   include("connect.php");
   		$Nom=$_POST['Nom'];
		$query="select id_ressource,Nom,Prenom,Login,libelle from ressource,profile  where Nom='$Nom' and ressource.profile=profile.id_profile";
		$result=mysql_query($query);
		$tot=mysql_num_rows($result);
		
		echo "<form action='test_ressource/test_supprision.php' method='post' name='editer' enctype='multipart/form-data'>";
		
		if ($tot==0)
		{
      		echo "<td colspan=9 align=center><h2>Il n'y a pas de Ressource à Afficher</td>";
			echo "<H4><a href='Supprimer_ressource.php'>Retour à recherche un Ressource</a>";
		}
    else if (!(empty($_POST["recherche"])))
    {
      echo "<table width=100% border=1 align=center background='images/img1.jpg' id='clr'>";
      echo "<tr >";
      echo "<td colspan=10 background='images/img1.jpg'><h2>Choix de Ressource à Supprimer</td>";
      echo "</tr>";
      echo "<tr align=center>";
      echo "<td><h4 class='h41'>Nom</td>";
      echo "<td><h4 class='h41'>Prenom</td>";
      echo "<td><h4 class='h41'>Login</td>";
      echo "<td><h4 class='h41' colspan=2>Profile</td>";
	  echo "<td>Choix</td>";
      echo "</tr>";
      $i=0;
      while ($row=mysql_fetch_array($result))
      {
	  	  
          echo "<td><h5>".$row["Nom"]."</td>";
          echo "<td><h5>".$row["Prenom"]."</td>";
          echo "<td><h5>".$row["Login"]."</td>";
          echo "<td><h5>".$row["libelle"]."</td>";
          echo "<td align=center><h5><input type='checkbox' name='type[]' value=".$row["Id_ressource"]."></td>";
          echo "</tr>";
      }
      echo "</table>";
	   echo "<br><br>";
      echo "<table width=50% align=center>";
      echo "<tr>";
      echo "<td align=center><input class='bouton' type='submit' name='Supprimer' value='Supprimer'></td>";
      echo "<td align=center><input class='bouton' type='reset' name='Annuler' value='Annuler'></td>";
      echo "</tr>";
  	  echo "</table>";
    }
      else
	  echo "<h4>Veuillez remplir le champ recherche !";
      echo "</form>";
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
