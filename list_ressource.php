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
<body>
<div id="header">
	<h1><a href="#"><marquee>Gestion des Conges</marquee></a></h1>
</div>
<?php
	include("connect.php"); 
 
      echo "<form action='' method='post'>";
      echo "<table width=100% border=1 align=center background='images/img1.jpg' id='clr'>";
      echo "<tr >";
      echo "<td colspan=12 align='center'><h2>liste des ressources </td>";
      echo "</tr>";
      echo "<tr align=center >";
	  echo "<td><h4 class='h41'>Code</td>";
      echo "<td><h4 class='h41'>Nom</td>";
      echo "<td><h4 class='h41'>Prenom</td>";
      echo "<td><h4 class='h41'>Date_naissance</td>";
      echo "<td><h4 class='h41'>Profil</td>";
      echo "<td><h4 class='h41'>Login</td>";
      echo "<td><h4 class='h41'>Passe</td>";
	  echo "<td><h4 class='h41'>Email</td>";
	  echo "<td><h4 class='h41'>Responsable</td>";
	  echo "<td><h4 class='h41'>Date_embauch</td>";
	  echo "<td><h4 class='h41'>Date_sortie</td>";
	  echo "<td><h4 class='h41'>Solde</td>";
      echo "</tr>";
	  
	  $requet="select * from ressource";
      $result=mysql_query($requet);
      $i=0;
      while ($row=mysql_fetch_array($result))
      {
	  echo "<tr>";
          	echo "<td><h5>".$row["Id_ressource"]."</td>";
        	echo "<td><h5>".$row["Nom"]."</td>";
       		echo "<td><h5>".$row["Prenom"]."</td>";
	    	echo "<td><h5>".$row["Date_naissance"]."</td>";
			echo "<td><h5>".$row["Profile"]."</td>";
       	 	echo "<td><h5>".$row["Login"]."</td>";
       	 	echo "<td><h5>".$row["Passe"]."</td>";
			echo "<td><h5>".$row["Email"]."</td>";
			echo "<td><h5>".$row["Responsable"]."</td>";
			echo "<td><h5>".$row["Date_embauch"]."</td>";
			echo "<td><h5>".$row["Date_sortie"]."</td>";
			echo "<td><h5>".$row["Solde"]."</td>";
		  echo "</tr>";
      }
      echo "</table>";
	   echo "<br><br>";
      echo "</form>";
  ?>
	<center><a href="ressource.php" title=""><h2>retour au Ressource</h2></a></center>
	
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
