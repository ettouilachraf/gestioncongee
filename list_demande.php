<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : gestion
Version    : 1.0
Released   : 20070503
Description: A three-column with variable width design suitable for large blogs or community websites.

-->
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
	<h1><a href="#"><i><marquee>Gestion des conges</marquee></i></a></h1>
</div>
<div id="left">
	<div id="menu" class="boxed">
		<h2 class="heading">Pages</h2>
		<ul>
			<li class="first"><a href="accueil_drh.PHP" title="">Accueil</a></li>
			<li><a href="demande.PHP" title="">Demande</a></li>
			<li><a href="ressource.PHP" title="">Ressource</a></li>
			<li><a href="joursferie.PHP" title="">jours ferie</a></li>
		</ul>
	</div>
</div>
<!-- end #left -->
<div id="right">
	<div class="boxed">
		<h1 class="heading">operations</h1>
		<ul>
			<li> <a href="ajouter_demande.PHP">Ajouter demande</a></li>
			<li><a href="recherch_demande.PHP">Modifier demande</a></li>
			<li><a href="Supprimer_demande.PHP">Supprimer demande </a></li>
			<li><a href="list_demande.PHP"> liste  demande </a></li>
		</ul>
	</div>
</div>
<!-- end #right -->
<div id="center">
	<div class="boxed">
		<h1 class="heading"><i>Gestion des conges</i> </h1>

 
 
		
<?php
include("connect.php");
		
	echo "<form action='' method='post' name='editer' enctype='multipart/form-data'>";
      echo "<table width=100% border=1 align=center background='images/img1.jpg' id='clr'>";
      echo "<tr >";
      echo "<td colspan=6 background='images/img1.jpg'><h2>la liste des demandes</td>";
      echo "</tr>";
      echo "<tr align=center>";
      echo "<td><h4 class='h41'>Date Debut</td>";
      echo "<td><h4 class='h41'>Date Fin</td>";
      echo "<td><h4 class='h41'>Nbr Jour</td>";
	  echo "<td><h4 class='h41'>Etat Demande</td>";
	  echo "<td><h4 class='h41'> Type</td>";
	  
      echo "</tr>";

       $requet="select * from demand_conge";
      $result=mysql_query($requet);
      $i=0;
       while ($row=mysql_fetch_array($result)) 
       {
	 echo "<tr>";
          echo "<td><h5>".$row["date_debut"]."</td>";
          echo "<td><h5>".$row["date_fin"]."</td>";
          echo "<td><h5>".$row["nb_jour_conge"]."</td>";
          echo "<td><h5>".$row["etat_demand"]."</td>";
	  echo "<td><h5>".$row["id_type"]."</td>";
          
		  echo "</tr>";}
      
      echo "</table>";
	   echo "<br><br>";
      echo "</form>";
  ?>
<center><a href="demande.php" title=""><h2>retour au Demande</h2></a></center>
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
