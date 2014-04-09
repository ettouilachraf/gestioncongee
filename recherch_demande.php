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
			<li> <a href="ajouter_demande.php">Ajouter demande</a></li>
			<li><a href="Modifier_demande.php">Modifier demande</a></li>
			<li><a href="Supprimer_demande.php">Supprimer demande </a></li>
			<li><a href="list_demande.php"> liste  demande </a></li>
		</ul>
	</div>
</div>
<!-- end #right -->
	
<div id="center">
	<div class="boxed">
		<h1 class="heading"><i>Gestion des conges</i> </h1>
		<form action="choix_demande.php" method="post">
	
		<h1>Rechercher la demande a modifier : </h1>
		<table border="2" background="images/img1.jpg" id="clr">
<?php 
include("connect.php");
$sql = " SELECT Nom,Prenom,Id_Ressource FROM ressource "; 
$result = mysql_query($sql) or die("Requete pas comprise");?>
 
 <tr>
<td colspan=2><h4 class='h42'>Nom prenom</td>
 <td><select name="test">
 
<?php while ($row=mysql_fetch_array($result)) 
{ 
echo"<option value='$row[2]'>$row[0] $row[1]</option>";
}?> 
       </select> 
	   </tr>
	   
	   
				<tr>
					<td  colspan="3" align="center"><input type="submit" value="rechercher" name="rechercher" size="15" /></td>
				</tr>
				
			</table>
	
		</form>
	
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
