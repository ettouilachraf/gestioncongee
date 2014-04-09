<html>
<head>
<title>Ajouter</title>
<link href="default.css" rel="stylesheet" type="text/css">
<script type="text/javascript"> 

function temps(date)

{

var d = new Date(date[2], date[1] - 1, date[0]);

return d.getTime();

}

function calculer() 

{ 



var date_Debut=document.forms['ajouter'].elements['date_Debut'].value

var date_Fin=document.forms['ajouter'].elements['date_Fin'].value



var debut = temps(date_Debut.split("/"));

var fin = temps(date_Fin.split("/"));

var nb = (fin - debut) / (1000 * 60 * 60 * 24); // + " jours";

document.forms['ajouter'].elements['jour'].value=nb;

} 

</script>

</head>
<body>
<div id="header">
	<h1><a href="#"><marquee>Gestion des conges</marquee></a></h1>
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
			<li><a href="recherch_demande.php">Modifier demande</a></li>
			<li><a href="Supprimer_demande.php">Supprimer demande </a></li>
			<li><a href="list_demande.php"> liste  demande </a></li>
		</ul>
	</div>
</div>
<div id="center">
<div class="boxed">
<h1 class="heading">Gestion des demandes </h1>
<form action="test_demande/valider_ajout.php" method="post" name="ajouter" enctype="multipart/form-data">
  <table width=75% border=2 align=center background="images/img1.jpg">
  <tr>
 <td colspan=6><h2>AJOUTER UNE DEMANDE</td>
 </tr>
  <tr>
   <td colspan=2><h4 class="h42">date debut</td>
 <td colspan=4><h5><input class='text' type='text' name='date_Debut' size=10 maxlength=50 > JJ/MM/AAAA</td> 
  </tr>
<td colspan=2><h4 class='h42'>date fin</td>
  <td colspan=4><h5><input class='text' type='text' name='date_Fin' size=10 maxlength=50 >JJ/MM/AAAA</td>
  </tr>
 <tr>
  <td colspan=2><h4 class='h42'>Nombre de jours</td>
 <td colspan=2> <h5><input class='text' type='text' name='jour' size=10 maxlength=50>
 <input type="button" onClick="return calculer()" value="calculer nb jour" /></td>
 </tr>
 
 <?php
   include("connect.php");
   $select=mysql_select_db("gestion_conge");
   $sql = " SELECT id_type,libell FROM type_conge "; 
   $result = mysql_query($sql) or die("Requete pas comprise");?> 
 <tr>
 <td colspan=2><h4 class='h42'>Type conge</td>
<td><select name="code" > 
<?php while ($row=mysql_fetch_array($result)) 
{ 
echo"<option value='$row[0]'>$row[1]</option>";
}?>
</select></td>
 </tr> 
<?php 
$sql = " SELECT Nom,Prenom,Id_ressource FROM ressource "; 
$result = mysql_query($sql) or die("Requete pas comprise");?>
 
 <tr>
<td colspan=2><h4 class='h42'>Nom prenom</td>
 <td><select name="test">
 
               <?php while ($row=mysql_fetch_array($result)) 
{ 
echo"<option value='$row[2]'>$row[0] $row[1]</option>";
}?> 
       </select> 

 <tr> 
 
  <td colspan=2><input class='bouton' type='submit' name='Enregistrer' value='Enregistrer'></td> 
 <td colspan=2><input class='bouton' type='reset' name='Effacer' value='Effacer'></td>
 
   </table>
 </form>
 </div>
 </div>
 <div style="clear: both;">&nbsp;</div>
<div id="footer">
	<p id="legal"></p>
	<p id="links"></p>
</div>
 

</body>

</html>
