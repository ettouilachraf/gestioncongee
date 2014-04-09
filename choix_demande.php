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
	<h1><marquee>Gestion des Conges</marquee></a></h1>
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
		<h1 class="heading"> operations</h1>
		<ul>
			<li> <a href="ajouter_demande.php">Ajouter demande</a></li>
			<li><a href="recherch_demande.php">Modifier demande</a></li>
			<li><a href="Supprimer_demande.php">Supprimer demande </a></li>
			<li><a href="list_demande.php">liste demande </a></li>
		</ul>
	</div>
</div>
<!-- end #right -->
<div id="center">
	<div class="boxed">
		<h1 class="heading"><i>Gestion des conges</i> </h1>
<?php
include("connect.php");
		$Nom=$_POST['test'];
		$query="select id_conge,date_debut,date_fin,nb_jour_conge,libelle,libell from demand_conge D,etat e,ressource r,type_conge t where d.etat_demand=e.code_etat and d.Id_ressource=r.Id_ressource and d.id_type=t.id_type  and d.Id_ressource='$Nom'";
		$d="select Nom,Prenom from ressource where Id_ressource='$Nom'";
		$dr=mysql_query($d);
		$result=mysql_query($query);
		$tot=mysql_num_rows($result);
		 echo "<td colspan=8 background='images/img1.jpg'><h2></td>";
	echo "la liste des demande de  "  ;
	                while ($row=mysql_fetch_array($dr)) 
{ 
echo "$row[0] $row[1] ";
}


	echo "<form action='modifier_demande.php' method='post' name='editer' enctype='multipart/form-data'>";
    
    if ($tot==0)
      echo "<td colspan=8 align=center   ><h2> Il n'y a pas de Demande</td>";
    else if (!(empty($_POST["rechercher"])))
    {
      echo "<table width=100% border=1 align=center background='images/img1.jpg' id='clr'>";
      echo "<tr align=center>";
      echo "<td><h4 class='h41'>Date Debut</td>";
      echo "<td><h4 class='h41'>Date Fin</td>";
      echo "<td><h4 class='h41'>Nembre Jour</td>";
	  echo "<td><h4 class='h41'>EtatDemande</td>";
	  echo "<td><h4 class='h41'>Type</td>";
	  echo "<td colspan= 3><h4 class='h41' >Choix</td>";
      echo "</tr>";
      $i=0;
      while ($row=mysql_fetch_array($result))
      {
         echo "<td><h5>".$row["date_debut"]."</td>";
          echo "<td><h5>".$row["date_fin"]."</td>";
          echo "<td><h5>".$row["nb_jour_conge"]."</td>";
		   echo "<td><h5>".$row["libelle"]."</td>";
		  echo "<td><h5>".$row["libell"]."</td>";
		 echo "<div id='div_chck'>";
		 echo "<td align=center><h5><input type='checkbox'  name='type[]' value=".$row["id_conge"]."></td>";
		 echo "</div>";
		 echo "<td align=center><h5>";
		  echo   "<button type='submit'>";
		 echo  "<img src='images/crayon.JPG' />";
         echo  "</button>";
		 echo "</td>";
         echo "</tr>";
       
      }
    
    }
      else
	  echo "<h4>Veuillez remplir le champ recherche !";
      echo "</form>";
  ?>
			</table>
	

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
