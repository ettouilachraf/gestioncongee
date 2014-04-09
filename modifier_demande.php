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
<?php 
include("connect.php");
$sql = " SELECT code_etat,libelle FROM etat "; 
$re = mysql_query($sql) or die("Requete pas comprise");?>
 
 <?php 
include("connect.php");
$sqle = " select id_type,libell from type_conge "; 
$res = mysql_query($sqle) or die("Requete pas comprise");?>
<div id="header">
	<h1><a href="#"><marquee>Gestion des Conges</marquee></a></h1>
</div>

<?php
   include("connect.php"); 
   
    if (!(isset($_POST["type"])))
    {
      echo "<H2>Vous devez selectionner au moins une demande !";
      echo "<br><br><br><br>";
      echo "<H2><a href='Javascript:history.go(-1)'>Retour a la page choix de demande</a><br>";
    }
    else
    {
      echo "<form action='test_demande/test_modifier.php' method='post'>";
      echo "<table width=100% border=1 align=center background='images/img1.jpg' id='clr'>";
      echo "<tr >";
      echo "<td colspan=12 align='center'><h2>Modifier les demandes </td>";
      echo "</tr>";
      echo "<tr align=center >";
      echo "<td><h4 class='h41'>Date Debut</td>";
      echo "<td><h4 class='h41'>Date Fin</td>";
      echo "<td><h4 class='h41'>Nbrj conge</td>";
	  echo "<td><h4 class='h41'>Etat Demande</td>";
	  echo "<td><h4 class='h41'>type</td>";
        echo "</tr>";
      $j=0;
      for ($i=0;$i<count($_POST["type"]);$i++)
      {
      	$query="select id_conge,date_debut,date_fin,nb_jour_conge,code_etat,libelle,libell from demand_conge D,etat e,ressource r,type_conge t where d.etat_demand=e.code_etat and d.Id_ressource=r.Id_ressource and  d.id_conge='".$_POST["type"][$i]."'";
      	$result=mysql_query($query);
        $row=mysql_fetch_array($result);
		echo "<input class='text' type='hidden' Name='id_conge[]' value='".$row["id_conge"]."' >";
        echo "<td><h5><input class='text' type='text' Name='Date Debut[]' value='".$row["date_debut"]."'></td>";
        echo "<td><h5><input class='text' type='text' Name='Date Fin[]' value='".$row["date_fin"]."' ></td>";
	    echo "<td><h5><input class='text' type='text' Name='Nbrj conge[]' value='".$row["nb_jour_conge"]."'></td>";
		        $val=$row["code_etat"];
				
				echo"<td><select name='etat'>"; 
				
                while ($ro=mysql_fetch_array($re)) {
									
					if ($val==$ro[0]){
						echo"<option value='$ro[0]' selected> $ro[1]</option>";
					}else{
					echo"<option value='$ro[0]' > $ro[1]</option>";
					}
				} 
                        echo"</select></td>";
						
						echo"<td><select name='code'>";	
						while ($row1=mysql_fetch_array($res)) { 
	
						
						echo"<option value='$row1[0]' > $row1[1]</option>";
				
						
						                                          } 
																  echo"</select></td>";
	echo "<tr>";
      }
    echo "</table>";
	echo "<td align=center><input class='bouton' type='submit' name='Modifier' value='Modifier'></td>";
	 echo "<H2><a href='Javascript:history.go(-1)'>Retour</a><br>";
    echo "</form>";
    }
  ?>	
<!-- end #center -->
<div style="clear: both; ">&nbsp;</div>
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
