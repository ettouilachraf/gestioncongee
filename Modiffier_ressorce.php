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
<?php 
include("connect.php");
$sql = " SELECT id_profile,libelle FROM profile "; 
$re = mysql_query($sql) or die("Requete pas comprise");?>

<?php 
include("connect.php");
$sqle = " select Id_ressource,Nom,libelle from ressource,profile where ressource.profile=profile.id_profile and profile.libelle like'manager' "; 
$resl = mysql_query($sqle) or die("Requete pas comprise");
?>
<?php
   include("connect.php"); 
   
    if (!empty($_POST["type"]))
   	{
      echo "<form action='test_ressource/test_modifier.php' method='post'>";
      echo "<table width=100% border=1 align=center background='images/img1.jpg' id='clr'>";
      echo "<tr >";
      echo "<td colspan=12 align='center'><h2>Modifier les ressources </td>";
      echo "</tr>";
      echo "<tr align=center >";
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
	  		$sql = " SELECT Date_embauch,Date_sortie,Solde FROM ressource where Id_ressource='".$_POST["type"]."'"; 
			$res = mysql_query($sql)  or die("Requete pas comprise");
 			 while($row=mysql_fetch_array($res)) 
			{  	$d_e=$row['0'];
				$d_s=$row['1'];
				$solde=$row['2'];
			}         
			$id=$_POST["type"];
      		$query="select Id_ressource,Nom,Prenom,Date_naissance,libelle,id_profile,Login,Passe,Email,Responsable,Date_embauch,Date_sortie,Solde from ressource,profile where Id_ressource=$id and ressource.profile=profile.id_profile";
      		$result=mysql_query($query);
        	$row=mysql_fetch_array($result);
			echo "<input class='text' type='hidden' Name='Id_ressource[]' value='".$row["Id_ressource"]."' size='10'>";
        	echo "<td><h5><input class='text' type='text' Name='Nom[]' value='".$row["Nom"]."'></td>";
       		echo "<td><h5><input class='text' type='text' Name='Prenom[]' value='".$row["Prenom"]."' ></td>";
	    	echo "<td><h5><input class='text' type='text' Name='Date_naissance[]' value='".$row["Date_naissance"]."'></td>";
       	 	$val=$row["id_profile"];
				echo "<td><h5><select name='Profile[]' id='Profile'>" ;
				
                while ($ro=mysql_fetch_array($re)) {
									
					if ($val==$ro[0]){
						echo"<option value='$ro[0]' selected> $ro[1]</option>";
					}else{
					echo"<option value='$ro[0]' > $ro[1]</option>";
					}
				} 
                        echo"</select></td>";
						
						
			echo "<td><h5><input class='text' type='text' Name='Login[]' value='".$row["Login"]."'></td>";
       	 	echo "<td><h5><input class='text' type='password' Name='Passe[]' value='".$row["Passe"]."'></td>";
			echo "<td><h5><input class='text' type='text' Name='Email[]' value='".$row["Email"]."'></td>";
			$val=$row["Responsable"];
			echo"<td><h5><select name='Responsable[]' id='Responsable'>";	
						while ($ro=mysql_fetch_array($resl)) 
						{ 
							if ($val==$ro[0]){
								echo"<option value='$ro[0]' selected> $ro[1]</option>";
							}else{
							echo"<option value='$ro[0]' > $ro[1]</option>";
							}
						} 
                      echo"</select></td>";
			echo "<td><h5><input class='text' type='text' Name='Date_embauch[]' value='".$d_e."' size='18'></td>";
			echo "<td><h5><input class='text' type='text' Name='Date_sortie[]' value='".$d_s."' size='13'></td>";
			echo "<td><h5><input class='text' type='text' Name='Solde[]' value='".$solde."' size='4'></td>";
      echo "</table>";
      echo "<br><br>";
      echo "<table width=50% align=center>";
      echo "<tr>";
      echo "<td align=center><input class='bouton' type='submit' name='Modifier' value='Modifier'></td>"; ?>
	 
	 <br /> <a href="recherch_modifier.php" ><h2> retoure à recherche ressource</h2></a>
       <?php
	  echo "</tr>";
      echo "</table>";
      echo "</form>";
    }
	else
	{
      echo "<H2>Vous devez selectionner au moins une demande !";
      echo "<br><br><br><br>";
      echo "<H2><a href='Javascript:history.go(-1)'>Retour a la page choix de demande</a><br>";
    }
  ?>	
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
